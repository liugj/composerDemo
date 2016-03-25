# composer入门

>  http://docs.phpcomposer.com/00-intro.html

# 安装composer

> *nix 安装 参考 http://docs.phpcomposer.com/00-intro.html#Installation-*nix

> Windows 安装  http://docs.phpcomposer.com/00-intro.html#Installation-Windows

# 生成composer.json文件
* 交互式生成 composer init
*  手工编辑
```
{
    "name": "Course/behavior",
    "authors": [
        {   
            "name": "刘国靖",
            "email": "liuguojing@gaodun.com"
        }   
      ],  
     "minimum-stability": "dev",
     "autoload":{
            "psr-4": {"Course\\": "src/"}
      },  
      "require": {}
}
```
> composer.json 各个字段含义和说明 参考http://docs.phpcomposer.com/01-basic-usage.html 
 
