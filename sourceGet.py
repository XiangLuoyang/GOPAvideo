# encoding=utf-8
import re
import codecs
import string
import sys
import os
import urllib
import urllib.request
import importlib
from bs4 import BeautifulSoup
import requests
from lxml import etree
from selenium import webdriver

#############找到要下载的链接#############
# home_url = "http://search.bilibili.com/all?keyword=%E6%80%95%E4%B8%8A%E7%81%AB%E6%9A%B4%E7%8E%8B%E8%80%81%E8%8F%8A&from_source=banner_search"
# doc = requests.get(home_url).text
# blockRule1 = '(<li class="video matrix ">\n\t\t\t\t<a.*?>\n\t\t\t\t\t<div.*?>\n\t\t\t\t\t\t<img.*?>)'
# titleRule='(title=".*?")'
# block=re.findall(blockRule1, doc)
# titles=re.findall(titleRule,block)




f=codecs.open('videoAddress.txt','w','utf-8')
for i in range(1, 10000):
    test_url = 'http://search.bilibili.com/all?keyword=%E6%80%95%E4%B8%8A%E7%81%AB%E6%9A%B4%E7%8E%8B%E8%80%81%E8%8F%8A&page=' + str(i)
    doctest = requests.get(test_url).text
    if(re.findall('<p class="text">\n(.*)+没有相关数据\n(.*)+</p>', doctest)):
        print("不存在第"+str(i)+"页")
        break
    else:
        print("存在第"+str(i)+"页")
        doc = requests.get(test_url).text
        # blockRule = '(<li class="video matrix ">\n\t\t\t\t<a href="//www.bilibili.com/video/av.*?\?)'
        blockRule = '(<li class="video matrix ">\n\t\t\t\t<a.*?>\n\t\t\t\t\t<div.*?>\n\t\t\t\t\t\t<img.*?>)'
        blockName = re.findall(blockRule, doc)
        urlRule = '(www.*?[0-9]+)'
        titleRule='(title=".*?")'
        imgRule='(src=".*?")'
        imgRule2='(//.*?g)'
        for eachUrl in blockName:
            url=re.findall(urlRule, eachUrl)
            title=re.findall(titleRule,eachUrl)
            img=re.findall(imgRule,eachUrl)
            for eachUrls in url:
                f.write(eachUrls)
                f.write('\n')
            for eachTitles in title:
                f.write(eachTitles)
                f.write('\n')
            for eachImgs in img:
                img2=re.findall(imgRule2,eachImgs)
                for eachImg2 in img2:
                    f.write(eachImg2)
                f.write('\n')
f.close()

# print(re.findall(maxPageNumRule,doc))
