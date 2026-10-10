<?php
/** Optional sample content for previewing Sunky Studio. */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function sunky_content_demo_data() {
	return array(
		'works' => array(
			array(
				'slug' => 'mdview',
				'title' => 'MDView',
				'excerpt' => '轻量的 Markdown 阅读与编辑工具。',
				'tagline' => '让 Markdown 读起来更舒服。',
				'intro' => '把注意力留给文档本身。这里可以介绍作品的使用场景、操作方式，以及你在阅读体验上的设计取舍。',
				'highlights' => array(
					array( '专注阅读', '清楚的内容层次，让长文更容易读下去。' ),
					array( '轻快打开', '从打开文件到开始阅读，减少多余的操作。' ),
					array( '顺手编辑', '阅读途中发现需要调整的内容，可以继续编辑。' ),
				),
				'features' => array(
					array( '阅读与编辑', '这里展示 Markdown 阅读、编辑与预览的功能介绍。' ),
					array( '长文导航', '这里可以说明目录跳转、文档定位和阅读进度。' ),
					array( '内容呈现', '这里可以展示图表、公式和代码片段的阅读效果。' ),
				),
			),
			array(
				'slug' => 'plainmint',
				'title' => 'PlainMint',
				'excerpt' => '打开就写、轻松整理的纯文本编辑器。',
				'tagline' => '给文字一个清爽的工作空间。',
				'intro' => '临时笔记、待办清单和文字草稿都可以从一个简单的编辑窗口开始。这里可以介绍 PlainMint 如何服务你的日常记录。',
				'highlights' => array(
					array( '马上开始', '减少进入写作状态之前的准备工作。' ),
					array( '界面清爽', '常用操作清晰可见，编辑区保持安静。' ),
					array( '随手记录', '让零散的想法有一个容易找到的位置。' ),
				),
				'features' => array(
					array( '文本编辑', '介绍日常输入、选择和修改文字的操作。' ),
					array( '文件整理', '介绍如何打开、保存和管理文本文件。' ),
					array( '使用细节', '介绍快捷键、字体设置或其他已经实现的功能。' ),
				),
			),
			array(
				'slug' => 'qzip',
				'title' => 'QZip',
				'excerpt' => '简洁顺手的文件压缩与解压工具。',
				'tagline' => '让压缩和解压回到简单。',
				'intro' => '收到压缩包时快速打开，需要分享文件时顺手打包。这里可以介绍 QZip 支持的格式、操作流程和使用建议。',
				'highlights' => array(
					array( '操作直接', '打开文件后，清楚地找到下一步操作。' ),
					array( '界面简洁', '把文件和任务信息放在容易理解的位置。' ),
					array( '日常实用', '围绕常见的打包和解压场景介绍作品。' ),
				),
				'features' => array(
					array( '打开压缩包', '介绍文件浏览和压缩包内容预览。' ),
					array( '解压文件', '介绍解压路径、任务进度及常用选项。' ),
					array( '创建压缩包', '列出实际支持的压缩格式和创建方式。' ),
				),
			),
			array(
				'slug' => 'dsh-desktop',
				'title' => 'DSH-Desktop',
				'excerpt' => '管理 DeepSeek Harness 的桌面启动器。',
				'tagline' => '把常用的启动操作放到桌面。',
				'intro' => '这里可以介绍桌面启动器的工作流程，以及如何帮助使用者管理配置和启动任务。',
				'highlights' => array(
					array( '桌面入口', '从图形界面进入常用工作流程。' ),
					array( '配置清楚', '把需要维护的设置集中展示。' ),
					array( '方便启动', '减少重复输入和查找命令的时间。' ),
				),
				'features' => array(
					array( '启动任务', '介绍任务的启动方式和必要准备。' ),
					array( '管理配置', '介绍配置内容及保存方式。' ),
					array( '查看状态', '介绍实际提供的运行信息和日志入口。' ),
				),
			),
			array(
				'slug' => 'pptx-refactor',
				'title' => 'pptx-refactor',
				'excerpt' => '将图片型 PPT 重构为可编辑演示文稿。',
				'tagline' => '让演示文稿重新可以修改。',
				'intro' => '这里可以展示输入素材、处理步骤与输出示例，说明图片型演示文稿如何进入后续编辑流程。',
				'highlights' => array(
					array( '面向修改', '以继续编辑和调整内容为目标。' ),
					array( '过程清晰', '用实际案例说明每一步处理。' ),
					array( '结果可见', '展示处理前后的页面对比。' ),
				),
				'features' => array(
					array( '输入素材', '说明支持的文件类型和输入要求。' ),
					array( '内容重构', '说明文字、图片和布局的处理方式。' ),
					array( '输出文件', '说明输出格式及后续编辑建议。' ),
				),
			),
			array(
				'slug' => 'agent-md-wizard',
				'title' => 'agent-md-wizard',
				'excerpt' => '通过向导整理仓库中的 Agent 工作说明。',
				'tagline' => '把项目约定写得更清楚。',
				'intro' => '这里可以介绍向导如何收集项目背景、代码规范和工作约定，并把它们组织成便于使用的说明。',
				'highlights' => array(
					array( '逐步填写', '通过明确的问题整理项目背景。' ),
					array( '约定集中', '让分散的规则有一个共同入口。' ),
					array( '方便维护', '随着项目演进继续补充和修改。' ),
				),
				'features' => array(
					array( '收集背景', '填写项目用途、技术栈和目录结构。' ),
					array( '整理规则', '补充开发约定和运行方式。' ),
					array( '生成说明', '介绍生成结果的格式和使用方式。' ),
				),
			),
			array(
				'slug' => 'cat-maze-adventure',
				'title' => 'cat-maze-adventure',
				'excerpt' => '带小猫收集鱼干、探索迷宫的小游戏。',
				'tagline' => '陪小猫走进下一段冒险。',
				'intro' => '这里可以介绍游戏目标、操作方式与关卡特色，让第一次进入的玩家快速了解怎么玩。',
				'highlights' => array(
					array( '轻松开始', '用简单的说明介绍基本操作。' ),
					array( '探索迷宫', '在关卡中寻找路径和目标。' ),
					array( '收集乐趣', '用小目标带来探索的动力。' ),
				),
				'features' => array(
					array( '移动与探索', '介绍角色移动和迷宫探索。' ),
					array( '关卡目标', '说明鱼干收集和完成关卡的条件。' ),
					array( '游玩提示', '补充适用设备和游玩建议。' ),
				),
			),
			array(
				'slug' => 'frog-hop',
				'title' => 'frog-hop',
				'excerpt' => '为儿童设计的青蛙跳跃小游戏。',
				'tagline' => '和小青蛙一起跳向下一片荷叶。',
				'intro' => '这里可以介绍跳跃规则、操作方法和游戏节奏，并展示适合小朋友理解的玩法说明。',
				'highlights' => array(
					array( '容易理解', '通过直观目标介绍游戏规则。' ),
					array( '轻松游玩', '让一局游戏成为短暂的休息。' ),
					array( '童趣画面', '展示角色、场景和关卡画面。' ),
				),
				'features' => array(
					array( '跳跃操作', '介绍起跳、落点和控制方式。' ),
					array( '关卡挑战', '说明游戏目标和推进方式。' ),
					array( '亲子体验', '补充适龄建议和陪伴游玩的提示。' ),
				),
			),
		),
		'articles' => array(
			array(
				'slug' => 'sunky-sample-building-small-tools',
				'title' => '从一个小问题开始，做一件顺手的工具',
				'excerpt' => '软件的起点可以很具体：一个重复出现的小麻烦，一段值得缩短的操作流程。',
				'content' => '<!-- wp:heading --><h2 class="wp-block-heading">先记录真正发生的问题</h2><!-- /wp:heading --><!-- wp:paragraph --><p>需要反复复制的文字、每次都要寻找的文件，或者一个让人停下来的操作，都可以成为作品的起点。先写下问题发生在哪里，再决定是否需要一个新工具。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">把第一版的目标写成一句话</h2><!-- /wp:heading --><!-- wp:paragraph --><p>清楚的目标能帮助你判断功能是否必要。第一版可以只完成一个流程，让使用者打开以后就知道下一步做什么。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">持续使用，再做调整</h2><!-- /wp:heading --><!-- wp:paragraph --><p>把工具放回日常工作中，记录哪里顺手、哪里还会卡住。后续更新可以从这些具体记录出发，一次改好一件事。</p><!-- /wp:paragraph -->',
			),
			array(
				'slug' => 'sunky-sample-release-notes',
				'title' => '一次软件更新，应该告诉使用者什么',
				'excerpt' => '用清楚的版本号、变更说明和下载入口，让更新变得容易理解。',
				'content' => '<!-- wp:heading --><h2 class="wp-block-heading">先说这次变化带来的结果</h2><!-- /wp:heading --><!-- wp:paragraph --><p>更新说明可以先告诉使用者哪个操作更方便了，或者哪个问题得到了修复。技术细节在需要帮助理解时再补充。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">让版本与文件对应起来</h2><!-- /wp:heading --><!-- wp:paragraph --><p>给发布的安装文件保留明确的版本号，并确认作品页面上的下载链接对应这次发布。发布前再看一遍适用平台和安装方式，避免使用者下载以后才发现不合适。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">留下可以回看的记录</h2><!-- /wp:heading --><!-- wp:paragraph --><p>简短的版本记录能够解释作品怎样逐步变化。以后遇到问题时，它也能帮助你确定变化从哪个版本开始。</p><!-- /wp:paragraph -->',
			),
			array(
				'slug' => 'sunky-sample-reading-interface',
				'title' => '让阅读界面更舒服的几个细节',
				'excerpt' => '字体、行宽、间距和导航，都会影响一篇长文能否轻松读下去。',
				'content' => '<!-- wp:heading --><h2 class="wp-block-heading">给正文合适的空间</h2><!-- /wp:heading --><!-- wp:paragraph --><p>行宽过长会让换行之后的视线定位变得困难，行宽过短又会频繁打断句子。可以用实际文章调整正文区域，而不是只用一小段占位文字判断效果。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">让层次清楚，但不过度抢眼</h2><!-- /wp:heading --><!-- wp:paragraph --><p>标题、段落和引用需要有稳定的区别。通过字号和间距建立层次，能够让读者在快速浏览和认真阅读之间自然切换。</p><!-- /wp:paragraph --><!-- wp:heading --><h2 class="wp-block-heading">在手机上再读一遍</h2><!-- /wp:heading --><!-- wp:paragraph --><p>桌面上合适的空间，到了手机上可能会让重要内容出现得太晚。把页面放到小屏幕上，从标题读到结尾，往往能找到需要调整的地方。</p><!-- /wp:paragraph -->',
			),
		),
	);
}

function sunky_content_demo_menu() {
	add_submenu_page( 'edit.php?post_type=sunky_product', 'Sunky 示例内容', '示例内容', 'manage_options', 'sunky-demo-content', 'sunky_content_demo_page' );
}
add_action( 'admin_menu', 'sunky_content_demo_menu' );

function sunky_content_demo_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$result_key = 'sunky_demo_result_' . get_current_user_id();
	$result = get_transient( $result_key );
	if ( $result ) {
		delete_transient( $result_key );
	}
	?>
	<div class="wrap">
		<h1>Sunky 示例内容</h1>
		<?php if ( $result ) : ?>
		<div class="notice <?php echo $result['errors'] ? 'notice-warning' : 'notice-success'; ?>"><p><?php echo esc_html( sprintf( '新增 %1$d 件作品、%2$d 篇文章，跳过 %3$d 条已有内容。', $result['works'], $result['articles'], $result['skipped'] ) ); ?></p>
		<?php foreach ( $result['errors'] as $error ) : ?><p><?php echo esc_html( $error ); ?></p><?php endforeach; ?></div>
		<?php endif; ?>
		<p>导入 8 件作品和 3 篇产品相关文章，查看作品首页、详情页和文章页的完整排版。所有内容都可以在后台修改或移入回收站。</p>
		<p>作品使用主题内置配图，并填写简介、亮点和功能。版本号为演示值，下载地址留空，请替换成自己的发布资料。文章正文包含示例提示。</p>
		<p>重复导入会跳过已有示例；如果已经有同名或同链接的作品，也会跳过，不会覆盖你编辑过的内容。</p>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<input type="hidden" name="action" value="sunky_import_demo">
			<?php wp_nonce_field( 'sunky_import_demo', 'sunky_demo_nonce' ); ?>
			<p><label for="sunky-demo-status"><strong>导入后的状态</strong></label> <select name="sunky_demo_status" id="sunky-demo-status"><option value="publish">直接发布（用于查看前台效果）</option><option value="draft">保存为草稿（编辑后再发布）</option></select></p>
			<?php submit_button( '导入示例内容' ); ?>
		</form>
		<p><a href="<?php echo esc_url( admin_url( 'edit.php?post_type=sunky_product' ) ); ?>">管理作品</a> · <a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>">管理文章</a></p>
	</div>
	<?php
}

function sunky_content_demo_existing( $type, $slug, $title ) {
	$statuses = array( 'publish', 'future', 'draft', 'pending', 'private', 'trash' );
	$sample = get_posts( array( 'post_type' => $type, 'post_status' => $statuses, 'posts_per_page' => 1, 'fields' => 'ids', 'meta_key' => '_sunky_demo_key', 'meta_value' => $slug ) );
	if ( $sample ) {
		return true;
	}
	$existing = get_posts( array( 'post_type' => $type, 'post_status' => $statuses, 'posts_per_page' => 1, 'fields' => 'ids', 'name' => $slug ) );
	if ( $existing ) {
		return true;
	}
	if ( 'sunky_product' === $type ) {
		return (bool) get_posts( array( 'post_type' => $type, 'post_status' => $statuses, 'posts_per_page' => 1, 'fields' => 'ids', 'title' => $title ) );
	}
	return false;
}

function sunky_content_import_demo( $status ) {
	$data = sunky_content_demo_data();
	$result = array( 'works' => 0, 'articles' => 0, 'skipped' => 0, 'errors' => array() );
	$notice = '<!-- wp:quote --><blockquote class="wp-block-quote"><!-- wp:paragraph --><p>这是用于预览 Sunky 站点排版的示例内容。请按实际作品资料修改后使用，演示版本号不代表当前发布版本。</p><!-- /wp:paragraph --></blockquote><!-- /wp:quote -->';
	foreach ( array( 'works' => 'sunky_product', 'articles' => 'post' ) as $group => $type ) {
		foreach ( $data[ $group ] as $index => $item ) {
			if ( sunky_content_demo_existing( $type, $item['slug'], $item['title'] ) ) {
				$result['skipped']++;
				continue;
			}
			$content = 'works' === $group
				? '<!-- wp:paragraph --><p>' . esc_html( $item['intro'] ) . '</p><!-- /wp:paragraph -->'
				: $item['content'];
			$meta = array( '_sunky_demo_key' => $item['slug'] );
			if ( 'works' === $group ) {
				$meta['_sunky_version'] = 'v1.0.0';
				$meta['_sunky_status'] = '示例内容';
				$meta['_sunky_tagline'] = $item['tagline'];
				foreach ( array( 'highlights' => 'highlight', 'features' => 'feature' ) as $key => $prefix ) {
					foreach ( $item[ $key ] as $number => $pair ) {
						$meta[ '_sunky_' . $prefix . '_' . ( $number + 1 ) . '_title' ] = $pair[0];
						$meta[ '_sunky_' . $prefix . '_' . ( $number + 1 ) . '_body' ] = $pair[1];
					}
				}
			}
			$post_id = wp_insert_post( array(
				'post_type' => $type,
				'post_status' => 'draft' === $status ? 'draft' : 'publish',
				'post_title' => $item['title'],
				'post_name' => $item['slug'],
				'post_excerpt' => $item['excerpt'],
				'post_content' => $notice . $content,
				'post_author' => get_current_user_id(),
				'menu_order' => $index,
				'meta_input' => $meta,
			), true );
			if ( is_wp_error( $post_id ) ) {
				$result['errors'][] = $item['title'] . '：' . $post_id->get_error_message();
			} else {
				$result[ $group ]++;
			}
		}
	}
	return $result;
}

function sunky_content_demo_handle() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( '没有权限导入示例内容。', '', array( 'response' => 403 ) );
	}
	check_admin_referer( 'sunky_import_demo', 'sunky_demo_nonce' );
	$lock = (int) get_option( 'sunky_content_demo_lock', 0 );
	if ( $lock && $lock < time() - 300 ) {
		delete_option( 'sunky_content_demo_lock' );
	}
	if ( ! add_option( 'sunky_content_demo_lock', time(), '', false ) ) {
		wp_die( '示例内容正在导入，请稍后返回示例内容页面。' );
	}
	try {
		$status = isset( $_POST['sunky_demo_status'] ) && is_string( $_POST['sunky_demo_status'] ) && 'draft' === wp_unslash( $_POST['sunky_demo_status'] ) ? 'draft' : 'publish';
		$result = sunky_content_import_demo( $status );
		set_transient( 'sunky_demo_result_' . get_current_user_id(), $result, 120 );
	} finally {
		delete_option( 'sunky_content_demo_lock' );
	}
	wp_safe_redirect( admin_url( 'edit.php?post_type=sunky_product&page=sunky-demo-content' ) );
	exit;
}
add_action( 'admin_post_sunky_import_demo', 'sunky_content_demo_handle' );
