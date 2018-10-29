# EasyCsv
The csv file Class for PHP
---
## The class is for csv file in PHP
## It has import export download methods

##import csv file
```
EasyCsv::init('json','./addrisk.csv','r');
$data = EasyCsv::importCsv();
```
---

##export csv file
```
EasyCsv::init('array','./addriskout.csv','w');
EasyCsv::exportCsv(['姓名','年龄'],['anke',27]);
```
---

##download csv file
```
$downRes = EasyCsv::downloadCsv('download.csv',['姓名','年龄'],[['anke',27],['rax',26]]);
```
---

## FAQ
```
Q:How to get the error?
EasyCsv::getError();
A:
```