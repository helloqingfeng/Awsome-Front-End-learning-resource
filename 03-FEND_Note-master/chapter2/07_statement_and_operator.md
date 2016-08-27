## 表达式与运算符

### 表达式

表达式为 JavaScript 的短语可执行并生成值。

```javascript
1.7 // 字面量
"1.7"
var a = 1;
var b = '2';
var c = (1.7 + a) * '3' - b
```

### 运算符

- 算数运算符 （`+` `-` `*` `/` `%`）
- 关系运算符 （`>` `<` `==` `!=` `>=` `<=` `===` `!==`)
- 逻辑运算符 （`!` `&&` `||`）
- 位运算符   （`&` `|` `^` `~` `<<` `>>`）
- 负值运算符 （`=`）
- 条件运算符 （`?:`）
- 逗号运算符 （`,`）
- 对象运算符 （`new` `delete` `.` `[]` `instanceof`）

#### === 全等符号

全等运算符用于盘对左右两边的对象或值是否类型相同且值相等。

**伪代码拆解**

```javascript
function totalEqual(a, b) {
  if (a 和 b 类型相同) {
    if (a 和 b 是引用类型) {
      if (a 和 b 是同一引用)
        return true;
      else
        return false;
    } else { // 值类型
      if (a 和 b 值相等)
        return true;
      else
        return false;
    }
  } else {
    return false;
  }
}
```

**例子**

```javascript
var a = "123";
var b = "123";
var c = "4";
var aObj = new String("123");
var bObj = new String("123");
var cObj = aObj;

a === aObj      // false
aObj === bObj   // false
aObj === cObj   // true
a === b         // true
a === c         // false
```

#### ==

`==` 用于判断操作符两边的对象或值是否相等。

**伪代码拆解**

```javascript
function equal(a, b) {
  if (a 和 b 类型相同) {
    return a === b;
  } else { // 类型不同
    return Number(a) === Number(b); // 优先转换数值类型
  }
}
```

**例子**

```javascript
"99" == 99; // true
new String("99") == 99; // true
true == 1; // true
false == 0; // true
'\n\n\n' == // true
```

##### 例外规则

- `null == undefined` 结果为真 `true`
- 在有 `null`/`undefined` 参与的 `==` 运算是不进行隐式转换。

```javascript
0 == null; // false
null == false; // false
"undefined" == undefined; // false
```

#### ! 取反

`!x` 用于表达 x 表达式的运行结果转换成布尔值（Boolean）之后取反的结果。`!!x` 则表示取 x 表达式的运行结果的布尔值。

```javascript
var obj = {};
var a = !obj // false;
var a = !!obj // true;
```

#### && 逻辑与

`x && y` 如果 x 表达式的运行交过转换成 Boolean 值为 false 则不运行表达式 y 而直接返回 x 表达式的运行结果。**相反**，如果 x 表达式的运行交过转换成 Boolean 值为 true 则运行表达式 y 并返回 y 表达式的运行结果。

**伪代码拆解**

```javascript
var ret = null;
if (!!(ret = x)) {
  return y;
} else {
  return ret;
}
```

**例子**

```javascript
var a = 0 && (function(){return 1 + 1;})(); // 0
var b = 1 && (function(){return 1 + 1;})(); // 2
```

#### || 逻辑或

`x || y` 如果 x 表达式的运行结果转换为 Boolean 值为 true，则不运行 表达式 y 而直接返回表达式 x 的运算结果。（与 `&&` 方式相反）

**伪代码拆解**

```javascript
var ret = null;
if (!!(ret = x)) {
  return ret;
} else {
  return y;
}
```

**例子**

```javascript
var a = 0 || (function(){return 1 + 1;})(); // 2
var b = 1 || (function(){return 1 + 1;})(); // 1
```

### 元算符优先级（Operator Precedence）

- `+` `-` `*` `/` 高于 `&&`
- `*` `/` 高于 `+` `-`
- `&&` 高于 `?:`
- `()` 内优先级高于之外

NOTE：和数学上的算术优先级类似，同级从**左到右**计算。如有疑问加上 `()` 既可解决优先级问题。

<table class="fullwidth-table">
 <tbody>
  <tr>
   <th>Precedence</th>
   <th>Operator type</th>
   <th>Associativity</th>
   <th>Individual operators</th>
  </tr>
  <tr>
   <td>19</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Grouping">Grouping</a></td>
   <td>n/a</td>
   <td><code>( … )</code></td>
  </tr>
  <tr>
   <td rowspan="3">18</td>
   <td><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Property_Accessors#Dot_notation">Member Access</a></td>
   <td>left-to-right</td>
   <td><code>… . …</code></td>
  </tr>
  <tr>
   <td><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Property_Accessors#Dot_notation">Computed Member Access</a></td>
   <td>left-to-right</td>
   <td><code>… [ … ]</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/JavaScript/Reference/Operators/Special/new" title="JavaScript/Reference/Operators/Special_Operators/new_Operator">new</a> (with argument list)</td>
   <td>n/a</td>
   <td><code>new … ( … )</code></td>
  </tr>
  <tr>
   <td rowspan="2">17</td>
   <td><a href="/en-US/docs/Web/JavaScript/Guide/Functions" title="JavaScript/Reference/Operators/Special_Operators/function_call">Function Call</a></td>
   <td>left-to-right</td>
   <td><code>… (&nbsp;<var>…&nbsp;</var>)</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/new" title="JavaScript/Reference/Operators/Special_Operators/new_Operator">new</a>&nbsp;(without argument list)</td>
   <td>right-to-left</td>
   <td><code>new …</code></td>
  </tr>
  <tr>
   <td rowspan="2">16</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Increment" title="JavaScript/Reference/Operators/Arithmetic_Operators">Postfix Increment</a></td>
   <td>n/a</td>
   <td><code>… ++</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Decrement" title="JavaScript/Reference/Operators/Arithmetic_Operators">Postfix Decrement</a></td>
   <td>n/a</td>
   <td><code>… --</code></td>
  </tr>
  <tr>
   <td rowspan="9">15</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Logical_Operators#Logical_NOT" title="JavaScript/Reference/Operators/Logical_Operators">Logical NOT</a></td>
   <td>right-to-left</td>
   <td><code>! …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators#Bitwise_NOT" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise NOT</a></td>
   <td>right-to-left</td>
   <td><code>~ …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Unary_plus" title="JavaScript/Reference/Operators/Arithmetic_Operators">Unary Plus</a></td>
   <td>right-to-left</td>
   <td><code>+ …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Unary_negation" title="JavaScript/Reference/Operators/Arithmetic_Operators">Unary Negation</a></td>
   <td>right-to-left</td>
   <td><code>- …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Increment" title="JavaScript/Reference/Operators/Arithmetic_Operators">Prefix Increment</a></td>
   <td>right-to-left</td>
   <td><code>++ …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Decrement" title="JavaScript/Reference/Operators/Arithmetic_Operators">Prefix Decrement</a></td>
   <td>right-to-left</td>
   <td><code>-- …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/typeof" title="JavaScript/Reference/Operators/Special_Operators/typeof_Operator">typeof</a></td>
   <td>right-to-left</td>
   <td><code>typeof …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/void" title="JavaScript/Reference/Operators/Special_Operators/void_Operator">void</a></td>
   <td>right-to-left</td>
   <td><code>void …</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/delete" title="JavaScript/Reference/Operators/Special_Operators/delete_Operator">delete</a></td>
   <td>right-to-left</td>
   <td><code>delete …</code></td>
  </tr>
  <tr>
   <td rowspan="3">14</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Multiplication" title="JavaScript/Reference/Operators/Arithmetic_Operators">Multiplication</a></td>
   <td>left-to-right</td>
   <td><code>… *&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Division" title="JavaScript/Reference/Operators/Arithmetic_Operators">Division</a></td>
   <td>left-to-right</td>
   <td><code>… /&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Remainder" title="JavaScript/Reference/Operators/Arithmetic_Operators">Remainder</a></td>
   <td>left-to-right</td>
   <td><code>… %&nbsp;…</code></td>
  </tr>
  <tr>
   <td rowspan="2">13</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Addition" title="JavaScript/Reference/Operators/Arithmetic_Operators">Addition</a></td>
   <td>left-to-right</td>
   <td><code>… +&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators#Subtraction" title="JavaScript/Reference/Operators/Arithmetic_Operators">Subtraction</a></td>
   <td>left-to-right</td>
   <td><code>… -&nbsp;…</code></td>
  </tr>
  <tr>
   <td rowspan="3">12</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise Left Shift</a></td>
   <td>left-to-right</td>
   <td><code>… &lt;&lt;&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise Right Shift</a></td>
   <td>left-to-right</td>
   <td><code>… &gt;&gt;&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise Unsigned Right Shift</a></td>
   <td>left-to-right</td>
   <td><code>… &gt;&gt;&gt;&nbsp;…</code></td>
  </tr>
  <tr>
   <td rowspan="6">11</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Less_than_operator" title="JavaScript/Reference/Operators/Comparison_Operators">Less Than</a></td>
   <td>left-to-right</td>
   <td><code>… &lt;&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Less_than__or_equal_operator" title="JavaScript/Reference/Operators/Comparison_Operators">Less Than Or Equal</a></td>
   <td>left-to-right</td>
   <td><code>… &lt;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Greater_than_operator" title="JavaScript/Reference/Operators/Comparison_Operators">Greater Than</a></td>
   <td>left-to-right</td>
   <td><code>… &gt;&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Greater_than_or_equal_operator" title="JavaScript/Reference/Operators/Comparison_Operators">Greater Than Or Equal</a></td>
   <td>left-to-right</td>
   <td><code>… &gt;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/in" title="JavaScript/Reference/Operators/Special_Operators/in_Operator">in</a></td>
   <td>left-to-right</td>
   <td><code>… in&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/instanceof" title="JavaScript/Reference/Operators/Special_Operators/instanceof_Operator">instanceof</a></td>
   <td>left-to-right</td>
   <td><code>… instanceof&nbsp;…</code></td>
  </tr>
  <tr>
   <td rowspan="4">10</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Equality" title="JavaScript/Reference/Operators/Comparison_Operators">Equality</a></td>
   <td>left-to-right</td>
   <td><code>… ==&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Inequality" title="JavaScript/Reference/Operators/Comparison_Operators">Inequality</a></td>
   <td>left-to-right</td>
   <td><code>… !=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Identity" title="JavaScript/Reference/Operators/Comparison_Operators">Strict Equality</a></td>
   <td>left-to-right</td>
   <td><code>… ===&nbsp;…</code></td>
  </tr>
  <tr>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comparison_Operators#Nonidentity" title="JavaScript/Reference/Operators/Comparison_Operators">Strict Inequality</a></td>
   <td>left-to-right</td>
   <td><code>… !==&nbsp;…</code></td>
  </tr>
  <tr>
   <td>9</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators#Bitwise_AND" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise AND</a></td>
   <td>left-to-right</td>
   <td><code>… &amp;&nbsp;…</code></td>
  </tr>
  <tr>
   <td>8</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators#Bitwise_XOR" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise XOR</a></td>
   <td>left-to-right</td>
   <td><code>… ^&nbsp;…</code></td>
  </tr>
  <tr>
   <td>7</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Bitwise_Operators#Bitwise_OR" title="JavaScript/Reference/Operators/Bitwise_Operators">Bitwise OR</a></td>
   <td>left-to-right</td>
   <td><code>… |&nbsp;…</code></td>
  </tr>
  <tr>
   <td>6</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Logical_Operators#Logical_AND" title="JavaScript/Reference/Operators/Logical_Operators">Logical AND</a></td>
   <td>left-to-right</td>
   <td><code>… &amp;&amp;&nbsp;…</code></td>
  </tr>
  <tr>
   <td>5</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Logical_Operators#Logical_OR" title="JavaScript/Reference/Operators/Logical_Operators">Logical OR</a></td>
   <td>left-to-right</td>
   <td><code>… ||&nbsp;…</code></td>
  </tr>
  <tr>
   <td>4</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Conditional_Operator" title="JavaScript/Reference/Operators/Special_Operators/Conditional_Operator">Conditional</a></td>
   <td>right-to-left</td>
   <td><code>… ? … : …</code></td>
  </tr>
  <tr>
   <td rowspan="12">3</td>
   <td rowspan="12"><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Assignment_Operators" title="JavaScript/Reference/Operators/Assignment_Operators">Assignment</a></td>
   <td rowspan="12">right-to-left</td>
   <td><code>… =&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… +=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… -=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… *=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… /=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… %=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… &lt;&lt;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… &gt;&gt;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… &gt;&gt;&gt;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… &amp;=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… ^=&nbsp;…</code></td>
  </tr>
  <tr>
   <td><code>… |=&nbsp;…</code></td>
  </tr>
  <tr>
   <td>2</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/yield" title="JavaScript/Reference/Operators/yield">yield</a></td>
   <td>right-to-left</td>
   <td><code>yield&nbsp;…</code></td>
  </tr>
  <tr>
   <td>1</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Spread_operator" title="JavaScript/Reference/Operators/Spread_operator">Spread</a></td>
   <td>n/a</td>
   <td><code>...</code>&nbsp;…</td>
  </tr>
  <tr>
   <td>0</td>
   <td><a href="/en-US/docs/Web/JavaScript/Reference/Operators/Comma_Operator" title="JavaScript/Reference/Operators/Comma_Operator">Comma / Sequence</a></td>
   <td>left-to-right</td>
   <td><code>… ,&nbsp;…</code></td>
  </tr>
 </tbody>
</table>
