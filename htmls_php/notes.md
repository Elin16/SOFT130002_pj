## 商品展示页 
- [x] 10
### 展示
- [x] 5
1. 读取**get**中的artworkID //get！！！
2. 在sql中进行查询
- [ ] * 文本css：首行缩进，使用连字符*
- [ ] * 需要在页面进入前检查该艺术品是否在用户的wishlist上，以此决定form的class是否可见
#### 访问量
- [x] 1
4. 学习sql的修改语句(update) 
### 添加收藏 取消收藏  :html、js 与 PHP
- [x] 4
1. php 查询是否已添加：alert（“已添加该艺术品”）：alert（“添加成功”）
2. 添加收藏按钮变为取消收藏按钮（*）
3. 设想：使用php echo 将artworkID 传入js；js传入php ，php 中 echo alert


## 收藏页
- [x]
1. 登进session中userID的相关信息
2. 展示收藏的所有艺术品：名称、上传日期
3.  ### 删除按钮的使用
4.  onsubmit->js 弹出框确认是否删除
5.  submit-> php post sql 删除相关艺术品

## 搜索页 15‘
1. 搜索关键词的支持
2. 搜索排序的支持
3. 什么是总体功能？

## homepage 

## 总体要求 5’
1. 正常工作
2. 代码风格良好
3. 性能良好

# presentation 图片大小

























4.截取字符串CN_和.mtl之间的内容（不包含CN_和.mtl）
``` javascript
var matchReg = /(?<=CN_).*?(?=.mtl)/;
```

``` javascript
var ftp1=/(?<=ftp1_).*?(?=_eofftp1);
var ftp2=/(?<=ftp2_).*?(?=_eofftp2);
var title=/(?<=title_).*?(?=_eoftitle);
var html=/(?<=href_).*?(?=_eofhref);                                 
var footprints=document.getElementById("footprints");
if(ftp1!=NULL){
        
}



var thisfootprint="href_"+"_eofhref"+"title_"+"_eoftitle";
if(footprint2!=NULL)
var src="ftp1_"+footprint2+"_eofftp1"+"ftp2_"+thisfootprint+"_eofftp2";
else if(footprint1!=NULL)
var src="ftp1_"+footprint1+"_eofftp1"+"ftp2_"+thisfootprint+"_eofftp2";
else var src="ftp1_"+thisfootprint+"_eofftp1";
```

头图轮播：
修改z-index值

login.php
问题：jqury修改html没反应
原因：语法错误
解决：
$('#info').php("登录成功");
