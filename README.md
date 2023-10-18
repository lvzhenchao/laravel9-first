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

# 3、模版blade引擎：site/index

# 4、环境配置：.env文件里面

# 5、migration基础
## 数据库版本控制：
### 创建数据库表: php artisan migrate
### 回滚表: php artisan migrate:rollback
### 创建表: php artisan make:migration create_article_table --create=article
### 新增字段场景：php artisan make:migration add_intro_column_to_article --table=article
#### 肯定不能rollback，会影响线上环境

# 6、Eloquent入门，通过orm轻松进行curd
## 创建模型：php artisan make:model Article
## 命令行交互界面： php artisan tinker


