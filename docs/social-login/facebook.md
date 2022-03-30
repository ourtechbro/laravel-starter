- Visit: https://developers.facebook.com/apps  
- Create app if you have not one already  
- Fot testing purpose from left top select dropdown> Create test app  
You will get app id and secret from Settings > Basic  
- Add your domain to App domains  
facebook required HTTPS connection  
you can easily get https connection in local by using  
[valet](https://laravel.com/docs/9.x/valet) on Mac or [laragon](https://laragon.org/) on Windows  
- goto facebook login > settings   
- add Valid OAuth Redirect URIs > example: ```https://laravel-starter.test/auth/facebook/callback```

To know more: https://www.positronx.io/laravel-socialite-login-with-facebook-tutorial-with-example/
