# hub2coolq
> Github webhook 消息转发至qq群

[coolq python SDK](https://github.com/richardchien/cqhttp-python-sdk)

[Coolq Api](https://github.com/richardchien/coolq-http-api)

### Install
```sh
pip3 install -r requirements.txt --user
```

### Config
```sh
cp config-dist.py config.py
```

### Test && Run
```sh
FLASK_APP=hub2coolq.py python3 -m flask run
```

在old_php 下的旧版的
### 依赖
php-curl

### 配置
```sh
cp config-dist.php config.php
```


### 参考文档

[Github webhook](https://developer.github.com/webhooks/)



### Todo

- [ ] Github webhook token support
- [ ] Event Summary
