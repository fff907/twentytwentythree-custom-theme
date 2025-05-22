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

---

※本テーマは個人学習・ポートフォリオ用に作成したものであり、公式テーマとは関係ありません。
