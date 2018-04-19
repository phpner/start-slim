# start - slim 3
###Installa 

`composer create-project phpner/start-slim` name

will download dependencies : 
```javascript
"require": {
        "slim/slim": "^3.0",
        "illuminate/database": "^5.6",
        "philo/laravel-blade": "3.*"
    },
```


To use laravel blade view in your contrallers you have to extends  AbstractController.

   ```php
   <?php
   
 namespace App\Controllers;
   
 class HomeController extends AbstractController
  {
     public function index()
       {
        echo $this->view('example');
       }
  }
?>
   ```
   
   In folder 'App/ View' make a file -  example**.blade**.php 
   
   For more information read here  [Laravel 5.1 blade ](https://laravel.com/docs/5.1/blade "Laravel 5.1")
   
   If you wanna use webpack 

`npm install`

will download 
```javascript
  "babel-core": "^6.26.0",
    "babel-loader": "^7.1.4",
    "backbone": "^1.3.3",
    "bootstrap": "^3.3.7",
    "browser-sync": "^2.23.6",
    "browser-sync-webpack-plugin": "^2.0.1",
    "css-loader": "^0.28.10",
    "extract-text-webpack-plugin": "^3.0.2",
    "file-loader": "^1.1.11",
    "jquery": "^2.2.4",
    "node-sass": "^4.7.2",
    "owl.carousel": "^2.3.3",
    "postcss-loader": "^2.1.1",
    "sass-loader": "^6.0.7",
    "style-loader": "^0.20.3",
    "webpack": "^3.11.0",
    "webpack-cli": "^2.0.11",
    "webpack-notifier": "^1.6.0"
```

when

`npm run start`

wiil watch your files : 

```
["public/assets/**/*.css","public/assets/js/*.js","App/View/**.php"]