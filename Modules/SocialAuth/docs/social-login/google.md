- Visit: https://console.cloud.google.com/home/dashboard
- Create new project if needed
- Credentials > oAuth > Create new Client ID
  Authorized redirect URIs will not access domains like: .test, 
so it's require to run with ```php artisan serve```
- for testing you need to add test emails to Test users


To know more: https://www.itsolutionstuff.com/post/laravel-6-socialite-login-with-google-gmail-accountexample.html
