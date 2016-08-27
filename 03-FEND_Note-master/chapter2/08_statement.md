## 语句

### 条件控制语句

其中expression可以使用整型，字符串，甚至表达式

```javascript
if (expression0) {statement0}
else if (expression1) {statement1}
else {statement2}

// JavaScript 中的 case 可以使用整型，字符串，甚至表达式
switch(persion.type) {
  case "teacher":
    statement1
    break;
  case "student":
    statement2
    break;
  default:
    statement3
    break;
}
```

### 循环控制语句

```javascript
while(expression) {statement}

// 至少执行一次
do {statement} while(expression);

for (initialise; test_expresiion; increment) {statement}

// 跳过下面代码并进入下一轮循环
continue;

// 退出当前循环
break;
```

#### for-in

用于遍历对象的**全部**属性。

```javascript
function Car(id, type, color) {
  this.type = type;
  this.color = color;
  this.id = id;
}

var benz = new Car('benz', 'black', 'red');
Car.prototype.start = function(){
    console.log(this.type + ' start');
}

for (var key in benz) {
  console.log(key + ':' benz[key]);
}

// 输出结果
type:black
color:red
id:benz
start:function (){
    console.log(this.type + ' start');
}

// -----------

// 如不需原型对象上的属性可以使用 hasOwnProperty
for (var key in benz) {
  if (benz.hasOwnProperty(key)) {
    console.log(key + ':' benz[key]);
  }
}

// 输出结果
type:black
color:red
id:benz
```

如不需原型对象上的属性可以使用 hasOwnProperty

```javascript
for (var key in benz) {
  if (benz.hasOwnProperty(key)) {
    console.log(key + ':' benz[key]);
  }
}
/* 输出结果
type:black
color:red
id:benz */
```

### 异常处理语句

```javascript
try{
  // statements
  throw new Error();
catch(e){
  // statements
}
finally{
  // statements
}
```

### with 语句

`with` 语句是 JavaScript 中特有的语句形式，它主要有两个作用：

其一，其用于缩短特定情况下必须书写的代码量。它可以暂时改变变量的作用域。

```javascript
// 使用 with 之前
(function(){
  var x = Math.cos(3 * Math.PI) + Math.sin(Math.LN10);
  var y = Math.tan(14 * Math.E);
})();

// 使用 with
(function(){
  with(Math) {
    var x = cos(3 * PI) + sin(LN10);
    var y = tan(14 * E);
  }
})();
```

![](../img/W/with-scope.png)

其二，改变变量的作用域，将`with`语句中的对象添加至作用域链的头部。

```javascript
frame[1].document.forms[0].name.value = "";
frame[1].document.forms[0].address.value = "";
frame[1].document.forms[0].email.value = "";

with(frame[1].document.[0]) {
  name.value = "";
  address.value = ""
  email.value = "";
}
```

**缺点**就是导致 JavaScript 语句的可执行性下降，所以通常情况下因尽可能的避免使用。
