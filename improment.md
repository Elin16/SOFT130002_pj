# TODO::
## use include 
- [ ] header
- [ ] footer
- [ ] nav 
## format vertify
- [ ] register
- [ ] log in
  
需求：登陆后一段时间推出后重新登陆，仍能保持用户在线

实现：
```phpregexp
setcookie(name, value, expire, path, domain);
```
## cookie相关???使用session
- [ ] 判断是否存在cookie（用户是否已经登陆）
```phpregexp
isset($_COOKIE["user"])
```
- [ ] 个人收藏页面，显示用户信息；展示该用户的心愿清单（file read&write）
## mysql
- [ ] homepage
- [ ] collection
- [ ] presentation
- [ ] search & result
