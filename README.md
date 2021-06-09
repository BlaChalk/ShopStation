# ShopStation購物網站實作

此網站為2020年下旬，與龍熒企業股份有限公司所合作之暑期實習專案。本專案著重於購物系統後端的撰寫，故使用基於Bootstrap4所打造的付費模板作為前端，並不著墨於前端所給之其他網站內容。

## 後臺系統介紹
### 登入系統
* **Route** /login
![](https://i.imgur.com/TeZtgVy.png)
本網站使用Laravel所內建的login架構進行登入的使用。

### 種類區分
* **Route** /admin/categories
![](https://i.imgur.com/kI3uy2c.png)
點選右上角的【Create Category】
![](https://i.imgur.com/J0NLRCW.png)
輸入所需的名稱、圖示與子種類。
![](https://i.imgur.com/clOjLgJ.png)
成功新增！
![](https://i.imgur.com/184VnOA.png)
(前台畫面)

* **新增子種類**
![](https://i.imgur.com/clOjLgJ.png)
點選右上角的【Create Category】
![](https://i.imgur.com/bNBSdw5.png)
選擇「原始主分類」，點選需要新增的主分類。
![](https://i.imgur.com/LWvlr5w.png)
成功新增子分類！
![](https://i.imgur.com/M1xib2b.png)

(前台畫面)

### 產品上架
* **Route** /admin/product-details
![](https://i.imgur.com/tzkNokl.png)
點選右上角的【Create Product】
![](https://i.imgur.com/aiGrKKa.png)
輸入所需的各類資訊。
![](https://i.imgur.com/dAxTqOR.png)
成功新增產品！

## 前臺功能展示
* **Route** /product
![](https://i.imgur.com/p5JWK7k.png)
左手邊可顯示種類。
![](https://i.imgur.com/JHEiCnl.png)
點進去後可顯示後台設定的資訊。
![](https://i.imgur.com/BMAJW4q.png)
下方點選可切換詳細介紹與規格表。
![](https://i.imgur.com/Mc54cRy.png)
