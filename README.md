<h1>「転・点・展」</h1>
<p>
これはたくさんの人がそれぞれの旅の思い出をシェアすることができるサイトである。昨今、TwitterやInstagramなどのSNSが人気を博しているが、そこでは旅に限らず、日常の風景や雑談、芸能ネタなど様々なトピックで溢れている。このサイトではあくまで「旅」にフォーカスを当てて、人々の思い出や豆知識をシェアしてもらいたいと考える。
タイトルも紐解くと、「転」は様々な土地を転々とする、「点」は人を点と見て、それぞれの点が繋がって欲しいという思い、「展」はそれぞれの思い出などを展示、共有して欲しいという思いから命名。
</p>
<br>
<br>
<br>
<br>
<br>
<h1>Demo</h1>
<p>このアプリケーションは管理者側とユーザー側で分離している。ユーザー側から管理者側のページは遷移できないようにネームスペースを分離。</p>
<br>
<h2>管理者側</h2>
<div>
  <h3>管理者トップページ</h3>
  <img width="500" alt="スクリーンショット 2021-07-08 17 03 02" src="https://user-images.githubusercontent.com/68839987/124885583-61ce3500-e00e-11eb-90d7-8b666ae85bd5.png">
  <p>管理者側のトップページ。ユーザーやジャンル、都市名のリンク先を用意。</p>
</div>
<br>
<div>
   <h3>管理者ユーザー一覧</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 05 51" src="https://user-images.githubusercontent.com/68839987/124885977-ca1d1680-e00e-11eb-83af-9f6bf45cfeb4.png">
   <p>管理者側のユーザー一覧。管理者特権で全てのユーザーの削除編集権限がある。</p>
</div>
<br>
<div>
   <h3>管理者都市名投稿一覧とジャンル投稿一覧</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 08 05" src="https://user-images.githubusercontent.com/68839987/124886405-2b44ea00-e00f-11eb-98b5-d378231b1544.png"><br>
   <img width="500" alt="スクリーンショット 2021-07-08 17 07 58" src="https://user-images.githubusercontent.com/68839987/124886418-2e3fda80-e00f-11eb-9ce6-e589e749c0ca.png">
   <p>管理者側の都市名とジャンル一覧。また、それぞれの新規追加機能も同ページに実装。ユーザーは管理者が設定した都市名とジャンルから選択し、投稿することとなる。これにより管理者がサイトを管理しやすくなる。</p>
</div>
<br>
<div>
   <h3>管理者ネームスペース</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 23 59" src="https://user-images.githubusercontent.com/68839987/124888783-634d2c80-e011-11eb-9ae4-9930e320a20f.png">
   <p>管理者側のURLをadminで実装。ユーザー側から管理者側へのリンク先はないので、URLを直打ちでログインするしかない。(セキュリティ対策)</p>
</div>
<br>
<h2>ユーザー側</h2>
<div>
   <h3>ユーザートップページ</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 27 52" src="https://user-images.githubusercontent.com/68839987/124889387-03a35100-e012-11eb-9ecd-a953411ad0cd.png">
   <p>ユーザー側のトップページ。swiperでスライドを実装。管理者が設定したジャンルから選択。</p>
</div>
<br>
<div>
   <h3>ユーザー投稿一覧と詳細</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 31 29" src="https://user-images.githubusercontent.com/68839987/124889853-71e81380-e012-11eb-8cd6-b40b97f8801c.png"> <br>
   <img width="500" alt="スクリーンショット 2021-07-08 17 31 36" src="https://user-images.githubusercontent.com/68839987/124889874-76acc780-e012-11eb-8bf0-d40a601ce675.png">
   <p>ユーザー側の投稿一覧と詳細。投稿した本人のみ削除が可能。また、詳細画面には返信機能を実装。</p>
</div>
<br>
<div>
   <h3>ユーザー新規投稿</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 31 36" src="https://user-images.githubusercontent.com/68839987/124890263-d3a87d80-e012-11eb-97ed-6f63557cd7cf.png">
   <p>ユーザー側の新規投稿画面。アカウントを作成しないと、新規投稿ができない。</p>
</div>
<br>
<div>
   <h3>ユーザ側のユーザー一覧</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 38 31" src="https://user-images.githubusercontent.com/68839987/124890805-60533b80-e013-11eb-93d1-e50e40383c0d.png">
   <p>ユーザ側のユーザー一覧画面。管理者側とは違い、アカウント作成者本人でないと、編集削除不可。</p>
</div>
<br>
<div>
   <h3>ユーザ削除確認画面</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 41 07" src="https://user-images.githubusercontent.com/68839987/124891168-b1632f80-e013-11eb-8a16-00777b621f56.png">
   <p>ユーザ側のユーザー削除確認画面。削除する前に確認を挟むことで誤動作を防止。</p>
</div>
<br>
<div>
   <h3>ユーザーネームスペース</h3>
   <img width="500" alt="スクリーンショット 2021-07-08 17 43 54" src="https://user-images.githubusercontent.com/68839987/124891717-33ebef00-e014-11eb-89b8-acce91afaa60.png">
   <p>ユーザー側のURLをuserで実装。ユーザー側と管理者側をこれで完全分離。</p>
</div>
<br>
<br>
<br>
<br>
<br>
<h1>Features</h1>
<img width="500" alt="スクリーンショット 2021-05-20 4 11 06" src="https://user-images.githubusercontent.com/68839987/118870395-79980f80-b921-11eb-9b7b-85e21f7ee627.png">
<br>
<br>
<br>
<br>
<br>
<h1>Dependency</h1>
- PHP (>= 7.0)<br>
- Laravel 6.0<br>
- MySQL<br>
- Bootstrap<br>
- Heroku
<br>
<br>
<br>
<br>
<br>
<h1>Usage</h1>
- http://laravelmysql.herokuapp.com/ にアクセス<br>
- デモユーザーでログイン(ヘッダーのハンバーガメニューを開くとログインボタンがあるのでそこからログイン)<br>
    - Mail: `test@test`<br>
    - Password: `password`<br>
- また、管理者でログインするには http://laravelmysql.herokuapp.com/ にアクセスした後にurlに /admin/home をつけてログインページに遷移。<br>
    - Mail: `test@test`<br>
    - Password: `password`




