# twentytwentythree-custom-theme

このテーマは、WordPress公式テーマ「Twenty Twenty-Three」をベースに構築されたカスタムテーマです。  
ローカル環境（Local WP）での動作を前提としており、主にテーマの構造理解と実装スキルの習得を目的としています。

## 📌 主な変更点

- `home.php` に WordPressループを用いた投稿一覧を追加
- `single.php`, `page.php`, `404.php` を新規作成し、基本のテンプレート構成を整備
- `functions.php` に `add_theme_support()` と `wp_enqueue_style()` を記述
- `style.css` にシンプルなデザイン調整（タイトル色、画像スタイル、余白など）

## ✅ 使用したWordPress関数の例

- `get_header()`, `get_footer()`
- `have_posts()`, `the_post()`, `the_title()`, `the_permalink()`, `the_content()`
- `the_post_thumbnail()`, `has_post_thumbnail()`
- `the_time()`, `the_posts_pagination()`

## 💡 本テーマの目的

- WordPressテーマファイルの構成（index.php, home.php 等）と働きの理解
- `functions.php` の役割の把握
- CSSとPHPを用いた構造とデザインの分離
- GitHubでのバージョン管理と公開テーマの作成

## ✅ functions.php の役割メモ

```php
<?php
add_theme_support('post-thumbnails');

function custom_theme_enqueue_styles() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');
```

add_theme_support('post-thumbnails') アイキャッチ画像（サムネイル）を有効化
wp_enqueue_style() CSSファイルを読み込むWordPress標準の関数
get_stylesheet_uri() 現在のテーマの style.css のパスを取得
add_action('wp_enqueue_scripts', ...) 指定関数をCSSやJS読み込みのタイミングで実行させる

## 📌 よく使う WordPress 関数（The Loop関連）

get_header() 　ヘッダーを読み込む
get_footer() 　フッターを読み込む
have_posts()　 投稿があるかどうかチェック
the_post() 　投稿データを1件分取り出す（ループで使用）
the_title()　 投稿タイトルを出力
the_permalink() 　投稿の個別ページURLを出力
the_content() 　投稿本文を出力
the_post_thumbnail('medium') 　アイキャッチ画像を表示（サイズ指定可）
the_time('Y年n月j日') 　投稿日時を表示（フォーマット可）
the_posts_pagination() 　複数ページ用のページナビゲーションを出力

## 🧠 Git操作の言語化（実務での使用を想定）

# 1. 変更をステージに追加
git add .

# 2. コメント付きでコミットを作成
git commit -m "Add style adjustments and functions.php"

# 3. GitHub（リモート）へpush
git push origin main

# 4. GitHubの更新をローカルに取り込む
git pull origin main

用語の意味
add　変更ファイルをGitの管理対象に追加（ステージング）
commit　ステージの内容をスナップショットとして保存
push　ローカルの変更をGitHubへ送信
pull　GitHub側の変更をローカルに取り込む
origin　GitHubのURLを指すエイリアス名
main　プロジェクトの中心ブランチ（旧master）

## 💡 このテーマ制作を通して得られたこと

【WordPressテーマが有効になる条件】
index.php か templates/index.html がないと「テンプレートが不足しています」と表示され無効化される。
style.css に Template: 行があると、親テーマを参照する子テーマとして認識されるため削除が必要だった。

【コンフリクトの対処】
Gitでの競合解消はマージエディタを活用したが、使い方に慣れるまでは混乱しやすかった。

【細かいミスが重大なエラーに】
the_post_pagination()（誤） → the_posts_pagination()（正） のような1文字違いでループが破壊された。

## 📝 今後の活用・面接対策として

WordPress関数は「何をするか」を一言で説明できるようにしておく。
functions.phpの役割は、add_theme_support での機能拡張や enqueue 関連の処理を“どうして必要か”説明できると◎。
Git操作は最低限のadd→commit→push→pullを流れで話せれば、実務経験が浅くても説得力あり。

---

※本テーマは個人学習・ポートフォリオ用に作成したものであり、公式テーマとは関係ありません。
