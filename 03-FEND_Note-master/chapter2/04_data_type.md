## 类型系统

javascript 类型系统可以分为标准类型和对象类型，进一步标准类型又可以分为原始类型和引用类型，而对象类型又可以分为内置对象类型、普通对象类型、自定义对象类型。

![](../img/J/javascript-variable-type.jpg)

### 标准类型

标准类型共包括了**6**个分别是：

**原始类型（值类型）**：

- Undefined `undefined`
- Null `null`
- Boolean `true`
- String `'hello'`
- Number `123`

**引用类型（对象类型）**：
- Object

```javascript
var obj = {};
<!-- 原始类型变量的包装类型如下 -->
var bool = new Boolean(true);
var str = new String("hello");
var num = new Number(1);
var obj0 = new Object();
```

原始类型和引用类型的区别：

原始类型储存在栈（Stack）中储存变量的值，而引用类型在栈中保存的是所引用内容储存在堆（Heap）中的值。类似于指针的概念，引用类型并非储存变量真实数值而是地址，所以对已引用类型的复制其实只是复制了相同的地址而非实际的变量值。

**Undefined** 值：undefined 出现场景：

- 以声明为赋值的变量 `var obj;`
- 获取对象不存在的属性 `var obj = {x: 0}; obj.y;`
- 无返回值函数的执行结果 `function f(){}; var obj = f();`
- 函数参数没有传入 `function f(i){console.log(i)}; f();`
- `void(expression)`

**Null** 值：null 出现场景：

- 获取不存在的对象 `document.getElementById('not-exist-element')`

**Boolean** 值：true, false 出现场景：

- 条件语句导致的系统执行的隐式类型转换 `if(隐式转换){}`
- 字面量或变量定义 `var bool = true;`

**String** 值：字符串 出现场景：

- `var str = 'Hello, world!';`

**Number** 值：整型直接量，八进制直接量（0-），十六进制直接量（0x-)，浮点型直接量 出现场景：

- `1026`
- `3.14`
- `1.2e5`
- `0x10`

**Object** 值：属性集合 出现场景：

- `var obj = {name: 'Xinyang'};`

### 变量转换表

|Value|Boolean|Number|String|
|-----|-------|------|------|
|undefined|false|NaN|"undefined"|
|null|false|0|"null"|
|true|true|1|"true"|
|false|false|0|"false"|
|''|false|0|''|
|'123'|true|123|'123'|
|'1a'|true|NaN|'1a'|
|0|false|0|"0"|
|1|true|1|"1"|
|Infinity|true|Infinity|"Infinity"|
|NaN|false|NaN|'NaN'|
|{}|true|NaN|"[object Object]"|

### 类型识别

- `typeof`
- `Object.prototype.toString`
- `constructor`
- `instanceof`

**typeof**：
- 可以是标准类型（Null 除外）
- 不可识别具体的对象类型（Function 除外）

**Object.prototype.toString**：
- 可是识别标准类型及内置对象类型（例如，Object, Date, Array）
- 不能识别自定义对象类型

**constructor**：
- 可以识别标准类型（Undefined/Null 除外）
- 可识别内置对象类型
- 可识别自定义对象类型

```javascript
function getConstructiorName(obj) {
  return obj && obj.constructor && obj.constructor.toString().match(/function\s*([^(]*)/)[1];
}
getConstructiorName([]) === "Array"; // true
```

**instanceof**：
- 不可判别原始类型
- 可判别内置对象类型
- 可判别自定义对象类型
