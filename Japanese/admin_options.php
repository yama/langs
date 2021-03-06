<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'HTTP_REFERERが不正です。フォーラムをある場所から他の場所へ移動したかドメインが変わった場合は、データベース内のベースURL（ configテーブルのo_base_url行）を更新してからキャッシュ（/cacheディレクトリ）をクリア（すべてのPHPファイルを削除）する必要があります。',
'Must enter title message'			=>	'掲示板のタイトルを入力してください。',
'Invalid e-mail message'			=>	'管理者メールアドレスが正しくありません。',
'Invalid webmaster e-mail message'	=>	'ウェブマスターのメールアドレスが正しくありません。',
'SMTP passwords did not match'		=>	'入力された SMTP パスワードが一致しません。',
'Enter announcement here'			=>	'アナウンスメッセージ',
'Enter rules here'					=>	'利用規約の内容',
'Default maintenance message'		=>	'フォーラムはメンテナンス中です。少し経ってからアクセスしてください。',
'Timeout error message'				=>	'"オンラインタイムアウト"は"無操作タイムアウト"より小さな値を指定してください。',
'Options updated redirect'			=>	'オプションが更新されました。リダイレクト中 …',
'Options head'						=>	'オプションの設定',

// Essentials section
'Essentials subhead'				=>	'基本設定',
'Board title label'					=>	'フォーラムのタイトル',
'Board title help'					=>	'フォーラムのタイトル（すべてのページの先頭に表示）。HTML使用<strong>不可</strong>。',
'Board desc label'					=>	'フォーラムの説明',
'Board desc help'					=>	'フォーラムの簡単な説明（すべてのページの先頭に表示）。HTML使用可。',
'Base URL label'					=>	'ベースアドレス',
'Base URL help'						=>	'最後の/（スラッシュ）を除いたフォーラムの完全なURL（例：http://www.mydomain.com/forums）。管理やモデレーション機能が正しく動作するための <strong>必須</strong> 項目です。"不正なリファラー"エラーが表示される場合は、恐らくここが間違っています。',
'Base URL problem'          =>  'Your installation does not support automatic conversion of internationalized domain names. As your base URL contains special characters, you <strong>must</strong> use an online converter in order to avoid "Bad referer" errors.',
'Timezone label'					=>	'タイムゾーン',
'Timezone help'						=>	'フォーラムに登録するユーザーのデフォルトタイムゾーン',
'DST label'							=>	'夏時間',
'DST help'							=>	'デイライト・セービング・タイム（DST）を有効にする場合にチェックします（時計を１時間進ませます）。',
'Language label'					=>	'言語',
'Language help'						=>	'ゲストや登録ユーザーのデフォルト言語。ここを変えても既存ユーザーの設定には影響しません。言語パックを削除した場合はここも更新する必要があります。',
'Default style label'				=>	'スタイル',
'Default style help'				=>	'ゲストや登録ユーザーのデフォルトスタイル。ここを変えても既存ユーザーの設定には影響しません。',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Moscow, Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan, Yekaterinburg',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Novosibirsk',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Krasnoyarsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Irkutsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern, Vladivostok',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Magadan',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Kamchatka',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

// Timeout Section
'Timeouts subhead'					=>	'日時の表示形式と時間設定',
'Time format label'					=>	'表示形式（時間）',
'PHP manual'						=>	'PHP マニュアル',
'Time format help'					=>	'[現在: %s]　詳しい書式は %s を参照',
'Date format label'					=>	'表示形式（日付）',
'Date format help'					=>	'[現在: %s]　詳しい書式は %s を参照',
'Visit timeout label'				=>	'リフレッシュタイム',
'Visit timeout help'				=>	'表示データが更新されるまでの待ち時間（単位：秒）。主に新しいメッセージの表示に影響します。',
'Online timeout label'				=>	'オンラインタイム',
'Online timeout help'				=>	'オンライン状態を強制的に解除するまでの待ち時間（単位：秒）',
'Redirect time label'				=>	'リダイレクトタイム',
'Redirect time help'				=>	'他のページに移動する時の待ち時間（単位：秒）。0（ゼロ）にするとリダイレクトページが表示されません（非推奨）。',

// Display Section
'Display subhead'					=>	'表示',
'Version number label'				=>	'バージョン',
'Version number help'				=>	'FluxBBのバージョンをフッターに表示します。',
'Info in posts label'				=>	'ユーザーの情報',
'Info in posts help'				=>	'トピックの表示でユーザー名の下に投稿者の情報（ロケーション、登録日、投稿数、メールアドレス、サイトアドレス）を表示します。',
'Post count label'					=>	'ユーザーの投稿数',
'Post count help'					=>	'ユーザーの投稿数をトピックページ、プロフィール、ユーザーリストに表示します。',
'Smilies label'						=>	'スマイリー（投稿）',
'Smilies help'						=>	'投稿のスマイリー文字列を小さなアイコンに変換します。',
'Smilies sigs label'				=>	'スマイリー（署名）',
'Smilies sigs help'					=>	'署名のスマイリー文字列を小さなアイコンに変換します。',
'Clickable links label'				=>	'リンクの自動生成',
'Clickable links help'				=>	'投稿内のURL文字列を自動的に検出してハイパーリンクに変換します。',
'Topic review label'				=>	'トピックレビュー',
'Topic review help'					=>	'投稿操作中に表示するトピックの最大数（新しいもの順）。0（ゼロ）にすると表示されません。',
'Topics per page label'				=>	'表示トピック数',
'Topics per page help'				=>	'フォーラムの１ページあたりに表示するトピック数。この値はユーザーが個々に設定できます。',
'Posts per page label'				=>	'表示投稿数',
'Posts per page help'				=>	'トピックの１ページあたりに表示する投稿数。この値はユーザーが個々に設定できます。',
'Indent label'						=>	'字下げ',
'Indent help'						=>	'8を設定すると[code][/code]タグ内のテキストがタブで字下げされます。それ以外はスペースで字下げされます。',
'Quote depth label'					=>	'引用の深さ',
'Quote depth help'					=>	'[quote]タグの入れ子の最大数。指定した数より深い[quote]タグは除去されます。',

// Features section
'Features subhead'					=>	'機能',
'Quick post label'					=>	'クイック投稿',
'Quick post help'					=>	'トピックの下にクイック投稿フォームを表示します。ユーザーはトピックを見ながら投稿できます。',
'Users online label'				=>	'オンラインユーザー',
'Users online help'					=>	'フォーラムを閲覧しているゲストと登録ユーザーの情報を索引ページに表示します。',
'Censor words label'				=>	'禁止用語',
'Censor words help'					=>	'特定な語句の入力を抑制します。詳しくは %s を参照。',
'Signatures label'					=>	'署名',
'Signatures help'					=>	'投稿に署名を添付できます。',
'User has posted label'				=>	'投稿ラベル',
'User has posted help'				=>	'ログイン中のユーザーが投稿したトピックの先頭にドットを表示します。サーバーに負荷が掛かる場合は無効にします。',
'Topic views label'					=>	'閲覧カウント',
'Topic views help'					=>	'トピックの閲覧数をカウントします。サーバーに負荷が掛かる場合は無効にします。',
'Quick jump label'					=>	'クイックジャンプ',
'Quick jump help'					=>	'フォーラムを移動するためのドロップダウンメニューを表示します。',
'GZip label'						=>	'圧縮出力',
'GZip help'							=>	'ブラウザにgzip圧縮したデータを送信します。この機能はデータ量を削減できますがCPUに負荷が掛かります。この機能を使うためにはPHPがzlibオプション（--with-zlib）付きでコンパイルされている必要があります。注意：ApacheにPHPの圧縮出力を行うmod_gzip または mod_deflate がインストールされている場合はこの機能は無効にします。',
'Search all label'					=>	'すべてのフォーラムを検索',
'Search all help'					=>	'無効にすると一回の検索で１つのフォーラムしか検索できなくなります。サーバーに負荷が掛かる場合は無効にします。',
'Menu items label'					=>	'追加メニューリンク',
'Menu items help'					=>	'テキストボックスに入力したHTMLのリンクがメインナビに表示されます。リンクは、X = &lt;a href="URL"&gt;LINK&lt;/a&gt; の形式で指定します。X はリンクの挿入位置を指定します（例：0は先頭、2は"ユーザーリスト"の次）。複数のリンクを設定する場合は改行します。',

// Feeds section
'Feed subhead'						=>	'Syndication',
'Default feed label'				=>	'デフォルトフィード',
'Default feed help'					=>	'フィードの種類を指定します。注意： "なし"はリンクが表示されなくなるだけでフィード機能自体は有効です。',
'None'								=>	'なし',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duration to cache feeds',
'Feed TTL help'						=>	'Feeds can be cached to lower the resource usage of feeds.',
'No cache'							=>	'Don\'t cache',
'Minutes'							=>	'%d minutes',

// Reports section
'Reports subhead'					=>	'通報',
'Reporting method label'			=>	'通知方法',
'Internal'							=>	'内部メッセージ',
'By e-mail'							=>	'メール',
'Both'								=>	'両方',
'Reporting method help'				=>	'トピックや投稿に通報があった場合の知らせ方を選択します。内部メッセージ、下記のメーリングリスト、または両方にメールで通知できます。',
'Mailing list label'				=>	'メーリングリスト',
'Mailing list help'					=>	'メールアドレスは,（カンマ）で区切ります。このリスト内のアドレスに通報があったことを知らせます。',

// Avatars section
'Avatars subhead'					=>	'アバター',
'Use avatars label'					=>	'アバターを使用',
'Use avatars help'					=>	'ユーザーごとにタイトルやランクの下に表示するアバター画像をアップロードできます。',
'Upload directory label'			=>	'アップロードディレクトリ',
'Upload directory help'				=>	'アバターのアップロードディレクトリ（FluxBBルートからの相対パス）。ディレクトリのパーミッションをPHPが書き込めるように設定しておく必要があります。',
'Max width label'					=>	'画像サイズ（幅）',
'Max width help'					=>	'アップロード可能な幅サイズ（単位：画素、推奨値：60）',
'Max height label'					=>	'画像サイズ（高さ）',
'Max height help'					=>	'アップロード可能な高さサイズ（単位：画素、推奨値：60）',
'Max size label'					=>	'ファイルサイズ',
'Max size help'						=>	'アップロード可能なファイルサイズ（単位：バイト、推奨値：10240）',

// E-mail section
'E-mail subhead'					=>	'メール',
'Admin e-mail label'				=>	'管理者のメールアドレス',
'Admin e-mail help'					=>	'フォーラム管理者のメールアドレスを指定します。',
'Webmaster e-mail label'			=>	'送信者のメールアドレス',
'Webmaster e-mail help'				=>	'フォーラムから送られるすべてのメールの差出人のアドレスを指定します。',
'Forum subscriptions label'			=>	'フォーラムの購読',
'Forum subscriptions help'			=>	'フォーラムの購読が可能になります。"購読"は誰かがトピックを立てた時にメールで知らせる機能です。',
'Topic subscriptions label'			=>	'トピックの購読',
'Topic subscriptions help'			=>	'トピックの購読が可能になります。"購読"は誰かが投稿した時にメールで知らせる機能です。',
'SMTP address label'				=>	'SMTP サーバー',
'SMTP address help'					=>	'外部のSMTPサーバーでメールを送信する場合のサーバーアドレスを指定します。SMTPサーバーが標準ポート(25)で動作しない場合はポート番号も指定します(例: mail.myhost.com:3580)。ローカルのメールシステムを使う場合は空のままにしておきます。',
'SMTP username label'				=>	'SMTP ユーザー名',
'SMTP username help'				=>	'SMTPサーバーのユーザー名。ユーザー名のみ入力します（殆どのサーバーは認証の必要は<strong>ありません</strong>）。',
'SMTP password label'				=>	'SMTP パスワード',
'SMTP change password help'			=>	'設定済みのパスワードを変更または削除する',
'SMTP password help'				=>	'SMTPサーバーのパスワード。パスワードのみ入力します（殆どのサーバーは認証の必要は<strong>ありません</strong>）。',
'SMTP SSL label'					=>	'暗号化',
'SMTP SSL help'						=>	'SMTPサーバーの通信をSSLで暗号化します。SMTPサーバーとPHPがSSLをサポートしている場合のみ使用できます。',

// Registration Section
'Registration subhead'				=>	'ユーザー登録',
'Allow new label'					=>	'登録を許可',
'Allow new help'					=>	'このフォーラムでユーザー登録を受け付けるかどうかを指定します。特殊な環境下でのみ無効にします。',
'Verify label'						=>	'登録を確認',
'Verify help'						=>	'フォーラムに登録したユーザーにランダムなパスワードを記したメールを送信します。パスワードはログイン後プロフィールページで変更できます。また、ユーザーがメールアドレスを変更した場合もメールで知らせます。ユーザー登録の乱用防止と登録されたメールアドレスの妥当性を検証する必要がある場合に"はい"にします。',
'Report new label'					=>	'登録を通知',
'Report new help'					=>	'ユーザーの登録通知をメーリングリスト（上記）のアドレスに送信します。',
'Use rules label'					=>	'利用規約を表示',
'Use rules help'					=>	'登録時に下記の利用規約への同意を強制します。利用規約へのリンクが常にメインナビに表示されます。',
'Rules label'						=>	'利用規約の内容',
'Rules help'						=>	'登録時に閲覧・承諾する必要があるルールや関連情報を入力します。"利用規約の表示"を有効にした場合に入力します。テキストはパースされずに表示されます（HTML可）。',
'E-mail default label'				=>	'メールの扱い',
'E-mail default help'				=>	'ユーザー登録時のメールアドレスの扱いを選択します。',
'Display e-mail label'				=>	'他のユーザーにメールアドレスを表示',
'Hide allow form label'				=>	'メールアドレスを隠す（メールの受信は可）',
'Hide both label'					=>	'メールアドレスを隠す（メールの受信も不可）',

// Announcement Section
'Announcement subhead'				=>	'アナウンス',
'Display announcement label'		=>	'アナウンスを表示',
'Display announcement help'			=>	'フォーラムに下のメッセージ を表示します。',
'Announcement message label'		=>	'アナウンスメッセージ',
'Announcement message help'			=>	'テキストはパースされずに表示されます（HTML可）。',

// Maintenance Section
'Maintenance subhead'				=>	'メンテナンス',
'Maintenance mode label'			=>	'メンテナンスモード',
'Maintenance mode help'				=>	'管理者だけがフォーラムにアクセスできるようになります。この機能はフォーラムをメンテナンスする目的で暫定的に閉鎖する場合に使います。 <strong>警告！ メンテナンスモード中はログアウトしないでください。</strong> ログアウトすると管理者もログインできなくなります。',
'Maintenance message label'			=>	'メンテナンスメッセージ',
'Maintenance message help'			=>	'メンテナンスモード中にユーザーに表示するメッセージを入力します。空にするとデフォルトメッセージが表示されます。テキストはパースされずに表示されます（HTML可）。',

);
