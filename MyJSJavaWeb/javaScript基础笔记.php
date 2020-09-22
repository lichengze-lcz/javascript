 <?php

?>

 一 .引入   
       1 <script> 可以定义在html任何位置， 但定义位置会影响执行顺序；
       2 <script> 可以定义多个     外嵌式定义   <script> href/js<script>;


 二.数据类型
      原始数据类型（基本数据类型）；
       1 number： 数字   整数/小数/NaN （not a number 一个没有数字的数字类型）；     
       2 String：字符串，   "ab"   "abcd" ;
       3 boolean: true and false;
       4 null : 一个占位为空的占位符；
       5 undefine: 未定义如果一个变量没有给初始化值，则会默认赋值为 undefine ；
       6 引用数据类型：对象


 四.变量
        一小快数据储存空间
       java语言 是强类型与语言；                强类型 在开辟变量储存空间时 ，定义了数据储存类型   例  int a = 10  只能是int类型、
       而Javascript 是弱类型语言              弱类型  在开辟变量储存空间时 ，没有定义了数据储存类型  var a = 1‘   var  abc； 
      
       typeof 运算符： 获取变量的类型

     
 五.运算符
         1 一元运算符
              ++（自增） ，--（自减） ，+,-（正/负号） 运算符类型转换  其他类型转number，
                          boolean转num， false转 0 true 转 1； 
                          string 转number，按字面值转换， 字面值不是数字则转   NUN； 
                                                                                    var num = 3;     先加一，后赋值
         2 算数运算符                                                                                                                   var a = ++num;    加加在前（先自增，在运算）
              + , -, *,/,%       3%4  商 0 余三                          
         3 赋值运算符                                                                                                                  结果  num= 4   a = 3; 
              = , +=, -=,
    
         4 比较运算符
              > , < , >=, <=, ===(全等于)      
                    1 字符相同： 直接比较
                          字符串:按字典顺序逐一比较（Ascell）
                    2 字符不同，先转类型，在比较；
                          “===” 全等于   比较之前，先判断类型，类型不同，则直接返回 “false”
              
         5 逻辑运算符
               &&(与) （true&&true）== true （缺一不可）            短路效果：左边为false，右边不运算 
               ||(或)                       （缺一也可）
               !(非) 
                    
           其他类型转 boolean                                        true
                    number： 0/NUN 为假，其他为真；         需求： if（111）{}
                        
                    string： 除了空字符串("") 其他都是true;
                    
                    null&nuderfine 都是   false   
                       var obj；无赋值，为空默认 underfine if（obj）{}  if(obj != null&&string.length>0){}
                                                             false     防止空指针异常   空字符串为false；
                    对象：所有对象都为 true

          6 三元运算符
                    ？：表达式    (如果是true取值一，false取值二)
                      var a = 3;
                      var b = 4;
                        var c = a > b ? 1:0;  
                        a>b吗  大于 c = 1 否则 c = 0;  

          7 流程控制语句：
          8 JS特殊语法 :
                     JS以;结尾   如果一行就一条语句    “;” 可以省略;;
                     var a = 0;  定义是局部变量
                      a = 0;     定义是全局变量


          九九乘法表  
           <script>
		   document.write("<table align='center'>");
		                                                                                          
		  for(var i  = 1; i <= 9; i++){                                                     
             document.write("<tr>");		
		  	
		  	  for(var j = 1; j <= i; j++){
             document.write("<td>");		
		  	  	
             document.write(j+"*"+i + "=" +(i*j)+"&nbsp&nbsp&nbsp")		
             document.write("</td>");		
		  	  	
		  	  }
             document.write("<tr/>");		
		  }
		 
             document.write("</table>");		
		  

 

  七.对象
  
    1 function对象
//    创建               
//           var fun  = new Function(形式参数列表,方法体)  不符合正常方法逻辑
	        
	        
//          方式一
//	         function  方法名称(形式参数列表){
//	         	方法体
//	         }
             
             function fun(a,b) {
             	alert(a+b);
             }
	         fun(1,2);
	        	
//	                方式二	
//	        var 方法名 = function(形式参数列表){
//	        	方法体
//	        }
	        
	        var fun1 = function(c,d,e,f,g){    //4
	        	alert(c+d);
	        }
	        fun1(3,1); 	

//   属性
//          length  代表（访问）形式参数的个数
             alert(fun1.length);   //5

	        	
//	 特点       	
//        1  形参的类型不用写  （var)  返回值也不用写
//        2  方法是一个对象,如果定义名称相同的方法,会覆盖,不会如java报错;
//        3  在js中方法调用与方法名称有关，与参数列表无关；    实参和形参个数可以不同；（多出来，没用到的数被【内置对象】arguements）；
	        fun1(3,3,4,5); 	
//        4  在方法声明中，有隐藏一个内置对象（数组），     arguments  封装所有的实际参数 ;   相当于Java数组  argument[0]  // 3   

//            求两个数之和
 /*               function add(a,b){
                   return a + b ;
               }
               var sum(5,6);
               alert(sum)   // 11
 */              

               function add(){
               var sum = 0;
               	 
                  for(var i = 0; i<arguments.length; i++){
               	      sum += arguments[i];
                   }
                   return sum;
               }
                var sum = add(2,4,1);
                alert(sum);   
               
//  调用
//          方法名称(实际参数列表);   

	        </script>


    2 Array()对象
     <script>
/*
             Array : 数组对象
                             
                              创建
                    var arr = new Array(Element,Element1...);
                    var arr = new Array(size);  默认长度
                    var arr = [元素列表]；
                      
*              方法 
 *                 join（） ：将数组中的元素按照 指定分隔符【分隔】
 *                 push（） ：向数组的末尾，添加一个或更多元素，并返回新的长度;
 *                 tostring（）：将数组转为字符串输出，并返回结果
 *                 reverse():颠倒元素数组中的顺序；
 *                 slice（） ：    已有数组排序
 *                 shift（）：删除并返回数组的第一个元素；
 *                 splice（）：删除并向数组添加新元素
 *                 unshift（）：向开头添加一个或多个元素，并返回新的长度；
 *             属性
 *                  length 数组的长度  
 *             特点
 *                  1 js中数组元素类型可变
// *                2 js中数组元素类型可变
 * */

//   创建
        var arr01 = new Array(2,3);
        var arr02 = new Array(25);
        var arr03 = [2,3,4,5,6,5,6,6];
        
        document.write(arr01+"<br/>");
        document.write(arr02+"<br/>");
        document.write(arr03+"<br/>");
        
     
//   特点  
// *                  js中数组元素类型可变
        var arr01 = new Array(2,"abc","true",);
        
// *                  js中数组元素长度可变
        document.write(arr01[5]+"86<br/>");   // 访问越界   默认 underfine
        arr01[4]="abc"                      //可以直接定义
        
        
//   方法 
// *                 push（） ：向数组的末尾，添加一个或更多元素，并返回新的长度;
        var arr04 = [2,3,4,5,6,7,8,9];
        arr04.push("======Element");
        document.write(arr04+"<br/>");
// *                 unshift（）：向开头添加一个或多个元素，并返回新的长度；
        var arr05 = [2,3,4,5,6,5,6,6];
        arr05.unshift("abc");
        document.write(arr05+"<br/>");
// *                 shift（）：删除并返回数组的第一个元素；
        var arr06 = [2,3,4,5,6,7,8,9];
        arr06.unshift("10");
        
        document.write(arr06+"<br/>");
     </script>
		
	</head>
	<body>
	</body>
</html>

    3 date()对象

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>date 日期对象</title>
		
		<script>
/*			
			date 日期对象
	               1 创建 ：
	                     var date = new Date()；
	           
                   2 方法
                         toLocaleString();   根据本地时间格式，转为本地字符串格式
	           
	                  getTime() :获取毫秒值      1970年1月一号
*/			
	                  var date = new Date();
                      document.write(date+"<br/>");
                      
                      document.write(date.toLocaleDateString()+"<br/>");
                      
                      document.write(date.getTime());
                      
                      

    4 Math  数学对象
	 *       
	 *             1 创建
	 *                特点 ： Math  对象不用创建，直接使用  Math.方法名();
	 *         
	 *             2 方法
	 *                random()： 返回 0~1 之间随机数（含0不含1） 需求 ：可以求出 数字间随机数；
	 *                ceil(x): 对数进行向上舍入；
	 * 	 *            floor(x): 对数进行向下舍入；
	 *                round(x): 把数四舍五入为接近的整数；
	 *             3 属性
	 *                PI
	 *            
    5 number
    6 String
    7 rRegExp 正则表达式     需求：表单校验
    
          定义字符串组成规则
                 [a-zA-z0-9-]   [a][ab] 从a 到b   

          特殊符号                
                 \d: 单个数字字符  [0-9]
                 \w: 单个字母字符  [a-zA-z0-9-]
          量词符号
                  ？： 出现 0次 或 1次
                  *：出现 0次 或 多次
                  +：出现 1次 或 多次
                {m,n}  m <= size <= n;
                   * m 如果缺省 ： {,n} : 最多n次；
                   * n 如果缺省 ： {m,} : 最少m次；
             
              创建   
                   var reg = rRegExp 正则
                   var reg = 正则
                  
                          	 检测     zhengze名称.rext(参数)；  
             
                 开始、结束 /^[m,n] &/

    
    8 global
              特点 ： 全局对象



 八. javascrip
    1 组成：  ECMAscript  
              Bom  ：
                       browser  object  mond   浏览器 对象模型
                         
              Dom  ：
                       Document Object model     文档对象模型
                
          控制html文档内容
                    控制页面标签对象 ElEment
                       document.getElementByid("id名");   
          操作 Elenent 对象
                        明确获取的对象哪一个                             img
                        查看API文档，查看哪些属性可以设置         src 
          
          修改标签体内容    
                  属性 ：innerHTML
                        获取元素对象
                       (var) name.innerhtml = "" 
              
    2 事件：      
                某些元素 执行啦被某些操作后， 触发啦某些代码的执行       
                        xxx 被xxx   我就xxx








    3 BOM
          browser  object  mond   浏览器 对象模型
         
          组成
              * window 窗口对象
              * Navigator 浏览器对象
              * screen 显示屏对象
              * History 历史记录对象
              * Location 地址栏对象


                window :窗口队象
		             	
		    创建
		        window 不用创建   直接使用       （window）.方法名（）；		              
		    方法
		               1 弹出方法有关
		                        window. alert();     警告框  
		                        comfirm();     确认按钮框取消按钮对话框
		                                                                                          如果用户点击确定按钮，返回true
		                                                                                          如果用户点击取消按钮，返回false
		                        prompt();     提示用户，输入对话框
		
                       2 打开关闭窗口方法    		                       
		                
		                        close();   关闭浏览器窗口； （谁调用，关谁 默认当前窗口）
		                        
		                        open(http);    打开一个新的浏览器窗口；    如 html <a href ="baidu.com">    
		
		
		              
		               3 定时器有关的方法       
		              
		                        setTimeout();   毫秒定时器；（指定毫秒调用函数表达式）                      clearTimeout(id); 清除
		                                                                                                                                                                          返回值：返回唯一编号，用于清除；
		                        setintval();    循环定时器：(指定的周期调用函数表达式)
		 
		                            function fun(){
                                       alert("要被调用才能使用");		                            	
		                            }
		                            setInterval(fun(),3000);   调用啦
		                      
		    属性
		               1 获取其他 BOM 对象
		                          history
		                          location
		                          Navigatior
		                          Screen
		                                      window.location;
		               2 获取 DOM对象

              
                                 * History 历史记录对象
		                                
                       创建 
                       window.history	      
	                          history
	      
	                    方法
	
	                   back();      加载 history对象 列表中的前一个  url 地址
	                   forward();   加载 history对象 列表中的后一个  url 地址
	                   go();        加载 history对象 列表中的 某个具体页面
	             
	
            	                 属性
                     length: 返回当前窗口历史列表的 URL 数量；










    4 DOM 
          Document Object model     文档对象模型
                 将文档各个部分封装成对象，可以使用这些对象，对标记语言进行CRUD动态操作；
                
                w3c（万维网联盟）标准被分成 三个不同的部分
                
                1 核心 DOM - 针对任何结构化文档的标准模型
                  * Document 文档对象
                  * ELement 元素对象
                  * Attribute 属性对象
                  * text 文本对象
                  * comment 注释对象
                  
                  *Node 节点对象  --其他五个的父对象 (可以是元素，文本 ...节点)
                  
                2 XML DOM 针对 XHTML文档标准的模型
                3 HTML DOM 针对 HTML文档标准的模型
                 



            * ELement 元素对象
               
               getElementByid  :  根据 id 属性 获得元素对象；
                        var name = document.getElementByid("idname");
                        
               getElementBytagname  ：根据元素名称，获取元素对象， 返回值是一个数组；
                        var name = document.getElementBytagname("div");
               
               getElementByClassname : 根据Class 属性值获取元素队象；返回值是一个数组
                        var name = document.getElementByClassname("div01");
                        
               getELementByname : 根据name属性获取元素对象
                        var name = document.getElementByname("usename");   name: "usename"
                        
                    
            2*创建其他 DOM对象；
              *createELEment("")     创建元素对象    
                                     var div33 = document.createElement("div");
               createAttribute()     为元素添加属性
     		                         div33.setAttribute("id","div3");
               createcommment()      
               craetrtextNode()       增加文本节点


            3 属性 
                 * ELement 元素对象
                   创建/获取： 通过 Document 获取、创建
                      方法： removeAttribute()  删除属性
                         setAttribute()  设置属性
                         



                  *Node 节点对象  --其他五个的父对象 (可以是元素，文本 ...节点)
                  所有 DOM 都可以认为是一个节点
              方法：
               *  CRUD DOM树
                    appendChild () : 向节点的子节点列表的结尾 添加新的子节点；
                    removeChild（）：删除（并返回），当前指定子节点；
                    parentNode（）：  添加一个父节点
                    replaceChild   ：用新节点替换一个子节点；                                        
      
              属性
                   parentNode.
                           var table = obja.parentNode.parentNode.parentNode;
	  	       	           var tr = obja.parentNode.parentNode;
	  	       	           table.remove(tr);







         九 .javaQuery $
           jQuery  基础 
                  1 概念：是javascript 的 框架；
                          Javascript 框架  ： 本质是 一些js文件，封装js的原装代码而已； 

                 
                  2 两者相互转换
                     jQ--->jS  jQ对象 [索引] 或 jQ对象.get[索引]；
                     jS--->jQ  $(jS对象)
                     
                           
                 *3 JQ强大的选择器 
                     
                     1基本选择器
                        标签（元素）选择器   
                            语法：$("html标签名")： 获取所有匹配标签元素；
                           
                        id 选择器   
                              语法：$("id 名")： 获取指定 id 属性匹配元素；   

                         类选择器   
                             语法：$(".class属性值")： 获取所有clss 属性匹配元素；


                     2 层级选择器
                         后代选择器
                             语法：$("A B") 选择 A 元素【内部】的所有 B 元素；

                         子选择器
                              语法：$("A > B") 选择 A 元素内部的所有 【B 子】 元素； （只会选择儿砸，不会选择孙咋）
 

                     3 属性选择器
                         属性名称选择器
                              $("A[属性名]") 包含指定属性选择器；
                        
                         属性选择器
                              语法：$("A[属性名 = '值'] ") 包含指定属性等于指定值 选择器；
                        
                         属性选择器
                              语法：$("A[id][属性名 = '值'] ") 包含多个属性条件 选择器；
                        
                           
                      4 过滤选择器
                          首/尾元素选择器
                              语法： $("div:first/last") 获取第一个/最后一个元素

                          非元素选择器
                              语法： $("not(.div1)") 不包括指定内容元素(类名为div1的选择器)
                            
                          奇/偶数选择器
                              语法： $("even/odd(1)") even 偶数/odd 奇数，从 0 开始计数   
                        
                          等于 大于 小于索引选择器
                              语法：eq(index)指定索引元素
                                    gt(index) 大于索引元素
                                    lt(index)小于索引元素；  

                        标题选择器
                              header 获取标题（h1-h6）元素，固定写法；


                     5 表单过滤选择器
                           可用元素选择器
                              语法：enabled 获得可用元素      例  $("input[type = "text"]:enabled").val("");    获取可用输入框的设置
                                                          disable ="disable"   
                           不可用元素选择器
                               语法：disabled 获得不可用元素  
                                  例 $("input[type = "text"]:disabled").val("");    获取不可用输入框的设置
                         
                           选中选择器
                              语法：checked  获取单选 复选框中的元素
                                  例 $("input[type = "checkbox"]:check")    获取复选框个数入框的设置      <input>
                                                                   
                           选中选择器
                               语法：selected  获取下拉框选中的元素
                                  例 $("#job > option:selected")    获取下拉列表的设置      <select>
                                     // 获取id名为 job 的 子元素为option ：选中的设置H

                  
                 4 DOM 树 操作 *
                  
                          1 内容操作
                               html()：  获取/设置元素的标签体内容；  
                               text():  获取/设置元素的标签体纯文本内容； 
                               val()：     获取/设置元素的value 属性值；
                          
                          2 属性操作*****
                             1 通用属性操作
                               attr(): 获取/设置元素属性
                               removeAttr(): 删除属性       
                               prop(): 获取/设置元素属性
                               removeProp(): 删除属性 
                          
                             *attr 和 prop 区别？
                               如果操作的是 元素的固有属性 ， 则建议使用 prop； 
                               如果操作的是 元素的自定义属性 ， 则建议使用 attr； 
                          
                          3 对class 属性操作    
                               addClass（）： 添加 class 属性值                            
                               removeClass（）： 删除 class 属性值                            
                               toggleClass（）： 	切换 class  属性值
                                       *toggleClass（“one”）；
                                       *判断如果元素对象 存在 class = “one” 则将属性值 one 删除掉；    
                                       *如果元素对象不 存在 class = “one” 则将属性添加；    
                                            


                 5 CRUD 操作： * 
                          1 append(): 父元素将子元素 追加到【末尾】；//添加 子 元素 (成父子关系)
                               *对象1.append(对象2)：将对象 2 添加到对象 1 内部。并且到末尾;
                                 
                          2 prepend(): 父元素将子元素 追加到【开头】；
                               *对象1.prepend(对象2)：将对象 2 添加到对象 1 内部。并且到开头;
                          
                          3 appendTo(): 父元素将子元素 追加到【末尾】；
                                对象1.append(对象2)：将对象 1 添加到对象 2 内部。并且到末尾;
                          4 prependTo(): 父元素将子元素 追加到【开头】；
                                对象1.prepend(对象2)：将对象 1 添加到对象 2 内部。并且到开头;


                          5 after(): 添加元素到元素后面；
                               *对象1.after(对象2)：将对象 2 添加到对象 后面。 //(对象 1 和对象 2，成兄弟关系)  
                          
                          6 before(): 添加元素到元素前面；
                               *对象1.before(对象2)：将对象 1 添加到对象 前面。  

                          7 insertAfter():
                                对象1.after(对象2)：将对象 2 添加到对象 后面。  
                          8 insertbBefore():
                                对象1.after(对象2)：将对象 2 添加到对象 前面。  

                          9 remove(); 移除元素
                               *对象.remove(“对象名”) : 将对象删除掉

                         10 empty(); 清空所有后代元素。
                               *对象.empty(); 将对象的后代全部清空，但是保留当前对象以及其属性节点；







                6 jquery 高级：
                
                
                
                          1遍历
                           
                          <ul id = "city">
                           <LI>北京</LI>
                           <LI>重庆</LI>
                           <LI>上海</LI>
                           <LI>西安</LI>
                          <ul>
                           
                           
                           
                           
                               js遍历方式
                             













































































































































































































































































































































































































































































































































