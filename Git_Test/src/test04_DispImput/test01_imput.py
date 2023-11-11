# -*- coding: utf-8 -*-

import sys
import Util

argvs = sys.argv
program_name = argvs[0]
graduation_year = Util.getGraduationYear(1)

if len(argvs) >= 2:
    imput = argvs[1]
    print("Hello" + " " + imput + " getGraduationYear(1):" + str(graduation_year))
    print("Hello", imput, " getGraduationYear(1):", graduation_year)
else:
    print("Hello")


# PHP側でSubmitした引数によって、処理を変更する
# 引数が1の場合、初期表示
# 引数が2の場合（送信押下時）、入力したデータを基に画面表示を行う

# まずはpython側でfront処理を記載出来るようにする
