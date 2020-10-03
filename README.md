Structured storage PHP SDK
========================
1. Install third-party dependencies

```
./composer.phar install
```

2. php environment configuration:
  需要安装Client URL Library（php curl）扩展,
否则会报PHP Fatal error:  Call to undefined function SDS\Client\curl_init()。

3. Client metrics are off by default. When on,
需要安装php pthreads扩展。

4. Run the sample code to test whether it is normal (need to modify the AppID/AppSecret in the sample code)

```
php examples/Basic.php
```


SDS PHP SDK User Guide
========================
1. Install dependencies

```
./composer.phar install
```

2. PHP Extensions:
* php curl extension (required)
* php pthreads extension (optional,required only when client metrics turned on)

3. Run examples (you need to change the AppID/AppSecret in the example code)

```
php examples/Basic.php
```
