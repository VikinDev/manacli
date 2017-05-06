ManaCli框架
=================

Requirements
------------

ManaCli is only supported on PHP 5.4+. ManaCli has been tested on Windows and Linux operating systems.

Installation
------------

The best way to install ManaPHP is to download the ManaCli from [github](https://github.com/manaphp/manacli).

##增加命令
###创建控制器
我们以创建一个维护时间显示的命令为例

在`@app/Cli/Controllers`目录下创建`TimeController.php`控制器,代码如下：
```php
<?php
namespace Application\Cli\Controllers;

use ManaPHP\Cli\Controller;

class TimeController extends Controller
{
    /**
     * @CliCommand  show current time
     * @CliParam    --format,-f          date format, default is Y-m-d H:i:s
     * @CliParam    --include-timestamp  show timestamp or not
     */
    public function defaultCommand()
    {
        $format = $this->arguments->get('format:f', 'Y-m-d H:i:s');
        $data = [];
        $data['time'] = date($format, time());
        if ($this->arguments->has('include-timestamp')) {
            $data['timestamp'] = time();
        }

        $this->console->writeLn(json_encode($data, JSON_PRETTY_PRINT));
    }
}
```
## 命令
###查看命令列表
```bash
D:\wamp\www\manacli>manacli
executed command is `help:list`
help  list all commands
test  demo for cli write
time  show current time
```
###执行命令
```bash
D:\wamp\www\manacli>manacli time
executed command is `time:default`
{
    "time": "2017-05-06 21:41:55"
}

D:\wamp\www\manacli>manacli time --format Y-m-d
executed command is `time:default`
{
    "time": "2017-05-06"
}

D:\wamp\www\manacli>manacli time -f Y-m-d
executed command is `time:default`
{
    "time": "2017-05-06"
}

D:\wamp\www\manacli>manacli time  --include-timestamp
executed command is `time:default`
{
    "time": "2017-05-06 21:44:21",
    "timestamp": 1494078261
}
```language
```