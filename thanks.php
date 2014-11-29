<?php 

$world_thanks = array(
  "*ありがとう* arigato 日本語 Japanese  日本 Japan",
  "*イヤイライケレ* yairaikere アイヌ語 Aynu itak  北海道 Hokkaido",
  "*谢谢* シエシエ xièxie 中国語 Chinese 中国 China",
  "*감사* 합니다 カムサハムニダ kamsahamnida 韓国語 Korean 韓国 Korea",
  "*고마워요* コマウォヨ komawoyoi 韓国語 Korean 韓国 Korea",
  "*ขอบคุณ* コープン khopkhun タイ語 Thai タイ Thailand ",
  "*ຂອບໃຈ* コープジャイ hkohp jay ラオス語 Lao  ラオス Laos ",
  "*អរគុណ។* オークン oh kun クメール語 Khmer カンボジア Cambodia ",
  "*Cám ơn* カムーン kahm uhn  ベトナム語 Vietnamese ベトナム Viet Nam ",
  "*Terima kasih* トゥリマカシー terima kasih インドネシア語 Indonesian インドネシア Indonesia ",
  "*Баярлалаа* バイラルラー bayarlaa モンゴル語 Mongolian モンゴル Mongolia ",
  "*ধোন্নোবাদ* ドンノバッド dhonnobad ベンガル語 Bengali インド（ベンガル地方） India (Bengal region) バングラデシュ Bangladesh ",
  "*धन्यवाद* ダンニャバード dhanyavad ヒンディー語 Hindi ネパール Nepal インド India ",
  "*நன்றி* ナンドゥリ nandri タミル語 Tamil タミル・ナドゥ州 (インド) Tamil Nadu (India) ",
  "*תודה* トーダ toda ヘブライ語 Hebrew イスラエル Israel ",
  "*شكرا* シュクラン shukran アラビア語 Arabic サウジアラビア Saudi Arabia アラブ首長国連邦 United Arab Emirates イラク Iraq エジプト Egypt ",
  "*مرسى* メルスィ mersi ペルシア語 Persian イラン Iran ",
  "*خيلی مَمنون* ヘイリィ・マムヌン kheili mamnun ペルシア語 Persian イラン Iran ",
  "*متشكرم* モタシャッケラン moteshakeram ペルシア語 Persian イラン Iran ",
  "*გმადლობთ *マドロプ madlobt グルジア語 Georgian グルジア Georgia ",
  "*დიდი მადლობა* ディディ・マドロバ didi madloba グルジア語 Georgian グルジア Georgia ",
  "*Teşekkürler* テシェキュラ teshekuler トルコ語 Turkish トルコ Turkey ",
  "*teşekkür ederim* テシェキュレデリム teshekurederim トルコ語 Turkish トルコ Turkey ",
  "*մերսի* メルスィ mersi アルメニア語 Armenian アルメニア Armenia ",
  "*շնորհակալություն* シュノラカルチューン shnorhakalutyun アルメニア語 Armenian アルメニア Armenia ",
  "*Спасибо* スパシーバ spasiba ロシア語 Russian ロシア Russia ",
  "*ευχαριστώ* エフハリスト efharisto ギリシャ語 Greek ギリシャ Greece ",
  "*благодаря *ブラゴダリャ blagodarya ブルガリア語 Bulgarian ブルガリア Bulgaria ",
  "*Grazie* グラツィエ grazie イタリア語 Italian イタリア Italia ",
  "*Merci* メルシー merci フランス語 French フランス France ",
  "*Gracias* グラスィアス gracias スペイン語 Spanish スペイン Spain ",
  "*Gràcies* グラスィエス gracies カタロニア語 Catalan カタロニア地方 (スペイン) Catalonia (Spain) ",
  "*Danke* ダンケ danke ドイツ語 German ドイツ Germany ",
  "*tanke* ダンカ tankkhuh ドイツ語（スイス） Swiss Germanスイス Swiss ",
  "*Dank u* ダンク・ユー dank u オランダ語 Dutch オランダ Holland ",
  "*Merci* メルシー merci ルクセンブルク語 Luxembourgian ルクセンブルク Luxembourg ",
  "*Dĕkuji* ジェクイ jekuji チェコ語 Czech チェコ共和国 Czech Republic ",
  "*Paldies* パルディエス Paldies ラトビア語 Latvian ラトビア Latvia ",
  "*Obrigado* オブリガード obrigado ポルトガル語 Portuguese 男性用 from male ポルトガル Portugal",
  "*Obrigada* オブリガーダ obrigada ポルトガル語 Portuguese 女性用 from female ポルトガル Portugal ",
  "*Tack* タック tack スウェーデン語 Swedish スウェーデン Sweden ",
  "*Kiitos* キートス kiitos フィンランド語 Finnish フィンランド Finland ",
  "*Asante* アサンテ asante スワヒリ語 Swahili ケニア Kenya タンザニア Tanzania ウガンダ Uganda ",
  "*dankie* ダンキー dankie アフリカ語 Afrikaans 南アフリカ South Africa ナミビア Namibia ",
  "*እግዜር ይስጥልኝ* イグゼル・イースティレニ igzer yist'illign アムハラ語 Amharic エチオピア Ethiopia ",
  "*aios / gangans* アイオス又はガンガンズ aios / gangans コエコエ語 khoekhoe ナミビア Namibia ",
  "*Murakoze* ムラコゼ murakoze ルワンダ語 Kinyarwanda ルワンダ Rwanda ",
  "*Murakoze* ムラコゼ murakoze ブルンジ語 Kirundi ブルンジ Burundi ",
  "*Kia ora* キア・オラ kia ora マオリ語 Maori マオリ族 (ニュージーランド) Maori (Newzealand) "
  );


if ($_POST) {
  
    $file = 'thanks.txt';
    // ファイルをオープンして既存のコンテンツを取得します
    $current = file_get_contents($file);
    $current .=  $_POST['user_name'] . " : " . $_POST['channel_name'] . "\r\n";
    file_put_contents($file, $current);

    $thanks_key = rand(0, count($world_thanks));

    $text = urlencode($world_thanks[$thanks_key]);
    $bot_name = urlencode("世界のありがとうbot");
    $url = "https://slack.com/api/chat.postMessage?token=xoxp-2445434829-2456731138-2457925582-0e6a89&channel=%23ma&text=$text&username=$bot_name&pretty=1";
    $ch = curl_init(); // init
    curl_setopt($ch, CURLOPT_URL, $url); // URLをセット
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // curl_exec()の結果を文字列で返す
    curl_setopt($ch, CURLOPT_HEADER, true); // ヘッダも出力したい場合
    $c = curl_exec($ch); // 実行
    curl_close($ch); // おまじない
} else {
    $count = count(file($file));
    echo "ありがとう総数 : " . $count;
}
