<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/ice.contact.css">
  <link rel="stylesheet" href="icepearl.php">
  <link rel="icon" href="images/ice pearl logo.jpg">
</head>
<body>
  <!--ナビゲーション-->
  <div class="fixed-top">
    <nav  class="navbar navbar-expand-md navbar-light">
      <img class="img" src="images/アセット 2.png" width="25px">
      <a href="./pearl.html"><img class="img2" src="images/アセット 1black.png" width="150px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-5">
            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="#">TOP</a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="./icetalent.html">Talent</a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="./ice.company.html">Company</a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link disabled" href="./ice.salon.html">Salon</a>
          </li>
          <li class="nav-item mr-5">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!--余白-->
  <div class="header-top">
    <p></p>
  </div>
  <!--お問合せ-->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-12 col-md-12">
        <!--CONTACT-->
        <div class="contact">
          <h1>CONTACT</h1>
          <p>※選択して下さい</p>
        </div>
        <div class="area">
          <input type="radio" name="tab_name" id="tab1" checked>
          <label class="tab_class" for="tab1">お仕事のご依頼</label>
          <div class="content_class">
            <p>企業の方はこちらを選択して下さい。</p>
          </div>
          <input type="radio" name="tab_name" id="tab2" >
          <label class="tab_class" for="tab2">アイスパールで働く</label>
          <div class="content_class">
            <p>弊社で働きたいという方はこちらを選択して下さい。</p>
            <p></p>
          </div>
          <input type="radio" name="tab_name" id="tab3" >
          <label class="tab_class" for="tab3">その他お問合せ</label>
          <div class="content_class">
            <p>その他のお問合せを受け付けております。</p>
          </div>
        </div>
        <!--お問合せフォーム-->
        <div class="Form">
          <div class="Form-Item">
            <p class="Form-Item-Label">
              <span>(企業の方のみ)会社名</span>
            </p>
            <input type="text" class="Form-Item-Input" placeholder="例）株式会社〇〇">
          </div>
          <form action="icepearl.php" method="post">
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名(ご担当者名)</p>
            <input type="text" name="to" class="Form-Item-Input" placeholder="例）山田太郎">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>フリガナ</p>
            <input type="text" name="title" class="Form-Item-Input" placeholder="例）ヤマダタロウ">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
            <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
            <textarea name="message" cols="60" rows="10" class="Form-Item-Textarea"></textarea>
          </div>
          <!--チェック-->
          <div class="check">個人情報保護方針に同意する：<input type="checkbox">
            <p>※間違いなければ送信ボタンを押して下さい</p>
            <input type="submit" name="send" class="Form-Btn" value="送信する">
          </div>
        </div></form>
      </div>
    </div>
  </div>
  <!--会社概要-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-6 foot">
        <h2>Company</h2>
        <p>株式会社 ICE PEARL PRODUCTION</p>
        <P>〒541-0057　大阪市中央区北久宝寺町3-6-1 本町南ガーデンシティ7階</P>
        <p>TEL：06-7639-8621</p>
        <p>mail: info@icepearl.co.jp</p>
        <br>
      </div>
      <div class="col-12 col-lg-6 col-md-6 foot">
        <h5>SNS</h5>
        <a href="https://www.instagram.com/icepearl_official" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://lin.ee/B0c7Z0T" target="_blank"><i class="fab fa-line"></i></a>
      </div>
    </div>
  </div>
  <p class="end">(c) ICE PEARL PRODUCTION</p>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>