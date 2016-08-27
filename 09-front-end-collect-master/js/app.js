angular.module('frontEnd', [])
  .factory('data', ['$http', function($http) {
    return {
      getFrontEndData: function() {
        var url = 'data/front-end.json';
        return $http.get(url);
      }
    };
  }])
  .controller('frontEndCtrl', ['$scope', '$window', 'data',
    function($scope, $window, data) {
      $scope.type = 'cluster';
      $scope.frontEndData = '';
      $scope.rotate = 0;

      $window.addEventListener('resize', function() {
        $scope.$broadcast('windowResize');
      });

      data.getFrontEndData()
        .success(function(res) {
          if (res.error) {
            throw new Error(res.message);
          } else {
            $scope.frontEndData = res
          }
        });
    }
  ]).directive('frontEndChart', ['data','$window', '$timeout', function(data, $window, $timeout) {

    var link = function($scope, $el, $attrs) {

      var radius = 960 / 2;

      var tree = d3.layout.tree()
           .size([radius*2, radius*2]);

      var diagonalTree = d3.svg.diagonal()
           .projection(function(d) { return [d.y, d.x]; });

      var cluster = d3.layout.cluster()
        .size([360, radius - 120]);

      var diagonalCluster = d3.svg.diagonal.radial()
        .projection(function(d) {
          return [d.y, d.x / 180 * Math.PI];
        });

      var svg = d3.select($el[0]).append("svg")
        .attr("width", document.documentElement.clientWidth)
        .attr("height", document.documentElement.clientHeight - 30)
        .call(
          d3.behavior.zoom().scaleExtent([0.6, 3]).on("zoom", zoom)
        );

      var g = svg.append("g")
        .attr("transform", "translate(" + radius + "," + radius + ")");

      function zoom () {
         //TODO: set translate range
         //TODO: after rotate, we need add rotate for zoom translate
         g.attr("transform", "translate(" + d3.event.translate + ")scale(" + d3.event.scale + ")" );
      }

      var timeout;

      function rotate(oldValue, newValue){
          if (timeout) $timeout.cancel(timeout);
          timeout = $timeout(function() {
              var rotate = $scope.rotate*6;
              var trans = g.attr("transform");
              if(trans.indexOf("rotate") !== -1){
                  trans = trans.replace(/rotate\([^()]*\)/, "rotate(" + rotate + ")");
              }else{
                  trans += "rotate(" + rotate + ")";
              }
              g.transition().duration(600).attr("transform", trans);
          }, 350);
      }

      var update = function() {
        if ($scope.frontEndData === '') return;

        var data = $scope.frontEndData;

        var nodes = cluster.nodes(data);
        var links = cluster.links(nodes);
        var diagonal = diagonalCluster;

        g.remove();

        g = svg.append("g")
           .attr("transform", "translate(" + radius + "," + radius + ")");

        if($scope.type == 'tree') {
            nodes = tree.nodes(data);
            links = tree.links(nodes);
            diagonal = diagonalTree;
            g.attr("transform", "translate(" + 160 + "," + 0 + ")");
        }

        var link = g.selectAll("path.link")
          .data(links)
          .enter().append("path")
          .attr("class", "link")
          .attr("d", diagonal);

        var node = g.selectAll("g.node")
          .data(nodes)
          .enter().append("g")
          .attr("class", "node")
          .attr("transform", function(d) {
            if ($scope.type == 'tree') {
                return "translate(" + d.y + "," + d.x + ")";
            } else {
                return "rotate(" + (d.x - 90) + ")translate(" + d.y + ")";
            }

          });

        node.append("circle")
          .attr("r", 4.5);

        node.append("text")
          .attr("dy", ".31em")
          .attr("dx", function(d) {
            if($scope.type == 'tree') {
                return d.children ? -8 : 8;
            } else {
                return 0;
            }
          })
          .attr("text-anchor", function(d) {
            if($scope.type == 'tree') {
                return d.children ? "end" : "start";
            } else {
                return d.x < 180 ? "start" : "end";
            }
          })
          .attr("transform", function(d) {
            if ($scope.type == 'tree') {
                return "";
            } else {
                return d.x < 180 ? "translate(8)" : "rotate(180)translate(-8)";
            }
          })
          .text(function(d) {
            return d.name;
          })
          .attr("fill", "#000")
          .on("click", function(d){
              if(typeof d.url !== "undefined" ){
                $window.open(d.url, "_blank");
              }
          }).on("mouseover", function(d) {

              //Update the tooltip position and value
              d3.select("#tooltip")
                .style("left", 10 + "px")
                .style("top", 40 + "px")
                .select("#desc")
                .text(d.description)
                
              d3.select("#name")
                .text(d.name);
 
              //Show the tooltip
              d3.select("#tooltip").classed("hidden", false);
           })
           .on("mouseout", function() {
              d3.select("#tooltip").classed("hidden", true);
           });
      };

      $scope.$watch('frontEndData', update);
      $scope.$watch('type', update);
      $scope.$watch('rotate', rotate);

    };
    return {
      template: '<div></div>',
      replace: true,
      link: link,
      restrict: 'E'
    };
  }
]);