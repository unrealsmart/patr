# AliyunCs for Patr
                            
> 图文识别（Picture and text recognition）是基于微信的阿里云人工智能技术实现的在线图片文本识别。

## 流程

- 用户进入小程序
- 上传图片
- 临时图片上传到服务器
- 服务器接收并临时存储图片（保存超时后自动删除）
- 调用**阿里云**`SDK`智能检测图片中的文本
- 输出内容到前端（小程序）
- 小程序接收并显示

## Aliyun AK

TODO： 需要设置**阿里云** `RAM` -> `AccessKey`
