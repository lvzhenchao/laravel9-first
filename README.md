[laravel-9的基础教程]

# 1、php内置服务器启动 和 框架内部指令启动
## php -S localhos:8888 t public
## php artisan serve 

# 2、基本工作流程
## route(路由)--controller(控制器)--view(视图)
### 生成控制器：php artisan make:controller SiteController 
### 向视图传递变量：
#### 数组: return view("sites", ['name'=>$name])
#### with: return view("sites.about")->with(['name'=>$name]) 
#### compact: return view("sites", compact('',''))

# 3、模版blade引擎


