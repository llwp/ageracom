<?php 


$options['sites'] = array (
  0 => '20141201.ageracom.agera.ssny.us',
);
$options['profiles'] = array (
  0 => 'standard',
  1 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'filter' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7014',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.34',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.34',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.34',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.34',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7079',
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud.test',
            10 => 'tests/entity_crud_hook_test.test',
            11 => 'tests/entity_query.test',
            12 => 'tests/error.test',
            13 => 'tests/file.test',
            14 => 'tests/filetransfer.test',
            15 => 'tests/form.test',
            16 => 'tests/graph.test',
            17 => 'tests/image.test',
            18 => 'tests/lock.test',
            19 => 'tests/mail.test',
            20 => 'tests/menu.test',
            21 => 'tests/module.test',
            22 => 'tests/pager.test',
            23 => 'tests/password.test',
            24 => 'tests/path.test',
            25 => 'tests/registry.test',
            26 => 'tests/schema.test',
            27 => 'tests/session.test',
            28 => 'tests/tablesort.test',
            29 => 'tests/theme.test',
            30 => 'tests/unicode.test',
            31 => 'tests/update.test',
            32 => 'tests/xmlrpc.test',
            33 => 'tests/upgrade/upgrade.test',
            34 => 'tests/upgrade/upgrade.comment.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/upgrade.upload.test',
            44 => 'tests/upgrade/upgrade.user.test',
            45 => 'tests/upgrade/update.aggregator.test',
            46 => 'tests/upgrade/update.trigger.test',
            47 => 'tests/upgrade/update.field.test',
            48 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.34',
      ),
    ),
    'themes' => 
    array (
      'stark' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.34',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
        ),
        'project' => 'drupal',
        'version' => '7.34',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.34',
        'description' => 'This platform is running Drupal 7.34',
      ),
    ),
    'profiles' => 
    array (
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/projects/ageracom/20141201/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.34',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/projects/ageracom/20141201/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.34',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1416429488',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.34',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'token' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'token',
          'datestamp' => '1361665026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.5',
      ),
      'wsclient_soap' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient_soap/wsclient_soap.module',
        'basename' => 'wsclient_soap.module',
        'name' => 'wsclient_soap',
        'info' => 
        array (
          'name' => 'Web service client SOAP',
          'description' => 'Implements a SOAP endpoint to connect to SOAP services.',
          'package' => 'Services',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wsclient_soap.module',
          ),
          'dependencies' => 
          array (
            0 => 'wsclient',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'wsclient_examples' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient_examples/wsclient_examples.module',
        'basename' => 'wsclient_examples.module',
        'name' => 'wsclient_examples',
        'info' => 
        array (
          'name' => 'Web service client examples',
          'description' => 'Example web services.',
          'package' => 'Services',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wsclient_examples.test',
          ),
          'dependencies' => 
          array (
            0 => 'wsclient_soap',
            1 => 'wsclient_rest',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'wsclient_tester' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient_tester/wsclient_tester.module',
        'basename' => 'wsclient_tester.module',
        'name' => 'wsclient_tester',
        'info' => 
        array (
          'name' => 'Web service client Tester',
          'description' => 'Extends the webservice client UI with a form for realtime web service debugging.',
          'core' => '7.x',
          'package' => 'Services',
          'dependencies' => 
          array (
            0 => 'wsclient_ui',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'wsclient_ui' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient_ui/wsclient_ui.module',
        'basename' => 'wsclient_ui.module',
        'name' => 'wsclient_ui',
        'info' => 
        array (
          'name' => 'Web service client UI',
          'description' => 'Provides a user interface to administer web service descriptions.',
          'package' => 'Services',
          'core' => '7.x',
          'configure' => 'admin/config/services/wsclient',
          'files' => 
          array (
            0 => 'wsclient_ui.inc',
          ),
          'dependencies' => 
          array (
            0 => 'wsclient',
            1 => 'rules',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'wsclient_rest' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient_rest/wsclient_rest.module',
        'basename' => 'wsclient_rest.module',
        'name' => 'wsclient_rest',
        'info' => 
        array (
          'name' => 'Web service client REST',
          'description' => 'Implements a REST endpoint to connect to REST services.',
          'package' => 'Services',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wsclient_rest.module',
          ),
          'dependencies' => 
          array (
            0 => 'wsclient',
            1 => 'http_client',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'wsclient' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wsclient/wsclient.module',
        'basename' => 'wsclient.module',
        'name' => 'wsclient',
        'info' => 
        array (
          'name' => 'Web service client',
          'description' => 'Interact with remote sites, provides Rules integration.',
          'package' => 'Services',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'wsclient.features.inc',
            1 => 'wsclient.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0',
          'project' => 'wsclient',
          'datestamp' => '1366136535',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'project' => 'wsclient',
        'version' => '7.x-1.0',
      ),
      'hybridauth_ulogin' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hybridauth/hybridauth_ulogin/hybridauth_ulogin.module',
        'basename' => 'hybridauth_ulogin.module',
        'name' => 'hybridauth_ulogin',
        'info' => 
        array (
          'name' => 'HybridAuth uLogin',
          'description' => 'Migrate uLogin identities to HybridAuth.',
          'core' => '7.x',
          'package' => 'HybridAuth',
          'configure' => 'admin/config/people/hybridauth/ulogin',
          'dependencies' => 
          array (
            0 => 'hybridauth',
          ),
          'version' => '7.x-2.9',
          'project' => 'hybridauth',
          'datestamp' => '1404273833',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hybridauth',
        'version' => '7.x-2.9',
      ),
      'hybridauth_bonus' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hybridauth/hybridauth_bonus/hybridauth_bonus.module',
        'basename' => 'hybridauth_bonus.module',
        'name' => 'hybridauth_bonus',
        'info' => 
        array (
          'name' => 'HybridAuth Bonus',
          'description' => 'Provides HybridAuth bonus features, like roles choosing upon registration.',
          'core' => '7.x',
          'package' => 'HybridAuth',
          'configure' => 'admin/config/people/hybridauth',
          'dependencies' => 
          array (
            0 => 'hybridauth',
          ),
          'version' => '7.x-2.9',
          'project' => 'hybridauth',
          'datestamp' => '1404273833',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hybridauth',
        'version' => '7.x-2.9',
      ),
      'hybridauth' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hybridauth/hybridauth.module',
        'basename' => 'hybridauth.module',
        'name' => 'hybridauth',
        'info' => 
        array (
          'name' => 'HybridAuth',
          'description' => 'Provides HybridAuth social sign-on.',
          'core' => '7.x',
          'package' => 'HybridAuth',
          'configure' => 'admin/config/people/hybridauth',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-2.9',
          'project' => 'hybridauth',
          'datestamp' => '1404273833',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'hybridauth',
        'version' => '7.x-2.9',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.2',
          'project' => 'features',
          'datestamp' => '1407338930',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-2.2',
      ),
      'webform_conditional' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/webform_conditional/webform_conditional.module',
        'basename' => 'webform_conditional.module',
        'name' => 'webform_conditional',
        'info' => 
        array (
          'name' => 'Webform Conditional',
          'description' => 'Allows Webform components to be hidden dependent on the value of other components',
          'core' => '7.x',
          'package' => 'Webform',
          'dependencies' => 
          array (
            0 => 'webform',
          ),
          'files' => 
          array (
            0 => 'webform_conditional.install',
            1 => 'webform_conditional.module',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'webform_conditional',
          'datestamp' => '1382017823',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'webform_conditional',
        'version' => '7.x-1.0-beta2',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.module',
            1 => 'redirect.admin.inc',
            2 => 'redirect.install',
            3 => 'redirect.test',
            4 => 'views/redirect.views.inc',
            5 => 'views/redirect_handler_filter_redirect_type.inc',
            6 => 'views/redirect_handler_field_redirect_source.inc',
            7 => 'views/redirect_handler_field_redirect_redirect.inc',
            8 => 'views/redirect_handler_field_redirect_operations.inc',
            9 => 'views/redirect_handler_field_redirect_link_edit.inc',
            10 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'redirect',
          'datestamp' => '1347989995',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'redirect',
        'version' => '7.x-1.0-rc1',
      ),
      'entitycache' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entitycache/entitycache.module',
        'basename' => 'entitycache.module',
        'name' => 'entitycache',
        'info' => 
        array (
          'name' => 'Entity cache',
          'description' => 'Provides caching for core entities including nodes and taxonomy terms.',
          'core' => '7.x',
          'package' => 'Performance and scalability',
          'files' => 
          array (
            0 => 'entitycache.module',
            1 => 'entitycache.comment.inc',
            2 => 'entitycache.taxonomy.inc',
            3 => 'entitycache.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'entitycache',
          'datestamp' => '1383216926',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entitycache',
        'version' => '7.x-1.2',
      ),
      'taxonomy_manager' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/taxonomy_manager/taxonomy_manager.module',
        'basename' => 'taxonomy_manager.module',
        'name' => 'taxonomy_manager',
        'info' => 
        array (
          'name' => 'Taxonomy Manager',
          'description' => 'Tool for administrating taxonomy terms.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'taxonomy_manager.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/taxonomy-manager-settings',
          'package' => 'Taxonomy',
          'version' => '7.x-1.0',
          'project' => 'taxonomy_manager',
          'datestamp' => '1369041918',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'taxonomy_manager',
        'version' => '7.x-1.0',
      ),
      'recaptcha_mailhide' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/recaptcha/recaptcha_mailhide.module',
        'basename' => 'recaptcha_mailhide.module',
        'name' => 'recaptcha_mailhide',
        'info' => 
        array (
          'name' => 'reCAPTCHA Mailhide',
          'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha_mailhide.module',
          ),
          'version' => '7.x-1.11',
          'project' => 'recaptcha',
          'datestamp' => '1391701492',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.11',
      ),
      'recaptcha' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/recaptcha/recaptcha.module',
        'basename' => 'recaptcha.module',
        'name' => 'recaptcha',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/recaptcha',
          'files' => 
          array (
            0 => 'recaptcha.admin.inc',
            1 => 'recaptcha.module',
            2 => 'recaptcha.install',
          ),
          'version' => '7.x-1.11',
          'project' => 'recaptcha',
          'datestamp' => '1391701492',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.11',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.0',
          'project' => 'google_analytics',
          'datestamp' => '1404257628',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'google_analytics',
        'version' => '7.x-2.0',
      ),
      'admin_views' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations (>=7.x-3.2)',
          ),
          'files' => 
          array (
            0 => 'plugins/views_plugin_display_system.inc',
            1 => 'plugins/views_plugin_access_menu.inc',
            2 => 'tests/admin_views.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'admin_views',
          'datestamp' => '1401347628',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_views',
        'version' => '7.x-1.3',
      ),
      'om_maps' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/om_maps/om_maps.module',
        'basename' => 'om_maps.module',
        'name' => 'om_maps',
        'info' => 
        array (
          'name' => 'OM Maps',
          'package' => 'OM',
          'description' => 'OM Maps, all image menus',
          'dependencies' => 
          array (
            0 => 'om_maximenu',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'om_maps.module',
            1 => 'inc/om_maps.admin.inc',
            2 => 'inc/om_maps.utils.inc',
          ),
          'configure' => 'admin/structure/om-maximenu/om-maps',
          'version' => '7.x-1.0-beta2',
          'project' => 'om_maps',
          'datestamp' => '1317031008',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'om_maps',
        'version' => '7.x-1.0-beta2',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views (>=3.0)',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.1',
          'project' => 'views_slideshow',
          'datestamp' => '1382584826',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.1',
      ),
      'aes' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/aes/aes.module',
        'basename' => 'aes.module',
        'name' => 'aes',
        'info' => 
        array (
          'name' => 'AES',
          'description' => 'Provides AES encryption.',
          'core' => '7.x',
          'configure' => 'admin/config/system/aes',
          'files' => 
          array (
            0 => 'aes.module',
            1 => 'aes.install',
          ),
          'version' => '7.x-1.8',
          'project' => 'aes',
          'datestamp' => '1396027146',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'aes',
        'version' => '7.x-1.8',
      ),
      'jquery_update' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jquery_update/jquery_update.module',
        'basename' => 'jquery_update.module',
        'name' => 'jquery_update',
        'info' => 
        array (
          'name' => 'jQuery Update',
          'description' => 'Update jQuery and jQuery UI to a more recent version.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jquery_update.module',
            1 => 'jquery_update.install',
          ),
          'configure' => 'admin/config/development/jquery_update',
          'version' => '7.x-2.4',
          'project' => 'jquery_update',
          'datestamp' => '1396482246',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'jquery_update',
        'version' => '7.x-2.4',
      ),
      'image_captcha' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/image_captcha',
          'files' => 
          array (
            0 => 'image_captcha.install',
            1 => 'image_captcha.module',
            2 => 'image_captcha.admin.inc',
            3 => 'image_captcha.user.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'captcha',
          'datestamp' => '1404666828',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'captcha',
        'version' => '7.x-1.1',
      ),
      'captcha' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha',
          'files' => 
          array (
            0 => 'captcha.module',
            1 => 'captcha.inc',
            2 => 'captcha.admin.inc',
            3 => 'captcha.install',
            4 => 'captcha.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'captcha',
          'datestamp' => '1404666828',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'captcha',
        'version' => '7.x-1.1',
      ),
      'globalredirect' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/globalredirect/globalredirect.module',
        'basename' => 'globalredirect.module',
        'name' => 'globalredirect',
        'info' => 
        array (
          'name' => 'Global Redirect',
          'description' => 'Searches for an alias of the current URL and 301 redirects if found. Stops duplicate content arising when path module is enabled.',
          'package' => 'Path management',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'globalredirect.test',
          ),
          'configure' => 'admin/config/system/globalredirect',
          'version' => '7.x-1.5',
          'project' => 'globalredirect',
          'datestamp' => '1339748779',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'globalredirect',
        'version' => '7.x-1.5',
      ),
      'disable_messages' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/disable_messages/disable_messages.module',
        'basename' => 'disable_messages.module',
        'name' => 'disable_messages',
        'info' => 
        array (
          'name' => 'Disable messages',
          'description' => 'Add options to filter messages shown to the end users',
          'core' => '7.x',
          'configure' => 'admin/config/development/disable-messages',
          'files' => 
          array (
            0 => 'disable_messages.module',
          ),
          'version' => '7.x-1.1',
          'project' => 'disable_messages',
          'datestamp' => '1343683333',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'disable_messages',
        'version' => '7.x-1.1',
      ),
      'better_formats' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/better_formats/better_formats.module',
        'basename' => 'better_formats.module',
        'name' => 'better_formats',
        'info' => 
        array (
          'name' => 'Better Formats',
          'description' => 'Enhances the core input format system by managing input format defaults and settings.',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.0-beta1',
          'project' => 'better_formats',
          'datestamp' => '1343262404',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'better_formats',
        'version' => '7.x-1.0-beta1',
      ),
      'imce_wysiwyg' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/imce_wysiwyg/imce_wysiwyg.module',
        'basename' => 'imce_wysiwyg.module',
        'name' => 'imce_wysiwyg',
        'info' => 
        array (
          'name' => 'IMCE Wysiwyg API bridge',
          'description' => 'Makes IMCE available as plugin for client-side editors integrated via Wysiwyg API.',
          'package' => 'User interface',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imce',
            1 => 'wysiwyg',
          ),
          'version' => '7.x-1.0',
          'project' => 'imce_wysiwyg',
          'datestamp' => '1317851503',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imce_wysiwyg',
        'version' => '7.x-1.0',
      ),
      'honeypot' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/honeypot/honeypot.module',
        'basename' => 'honeypot.module',
        'name' => 'honeypot',
        'info' => 
        array (
          'name' => 'Honeypot',
          'description' => 'Mitigates spam form submissions using the honeypot method.',
          'core' => '7.x',
          'configure' => 'admin/config/content/honeypot',
          'package' => 'Spam control',
          'files' => 
          array (
            0 => 'honeypot.test',
          ),
          'version' => '7.x-1.17',
          'project' => 'honeypot',
          'datestamp' => '1401478128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'honeypot',
        'version' => '7.x-1.17',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.2',
          'project' => 'views_bulk_operations',
          'datestamp' => '1387798183',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.2',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.2',
          'project' => 'views_bulk_operations',
          'datestamp' => '1387798183',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_bulk_operations',
        'version' => '7.x-3.2',
      ),
      'om_maximenu' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/om_maximenu/om_maximenu.module',
        'basename' => 'om_maximenu.module',
        'name' => 'om_maximenu',
        'info' => 
        array (
          'name' => 'OM Maximenu',
          'package' => 'OM',
          'description' => 'OM Maximenu, add any block inside your menus',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'om_maximenu.install',
            1 => 'om_maximenu.module',
            2 => 'inc/om_maximenu.admin.inc',
            3 => 'inc/om_maximenu.utils.inc',
          ),
          'scripts' => 
          array (
            0 => 'js/om_maximenu.js',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/om_maximenu.css',
            ),
          ),
          'configure' => 'admin/structure/om-maximenu',
          'version' => '7.x-1.44',
          'project' => 'om_maximenu',
          'datestamp' => '1352267204',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'om_maximenu',
        'version' => '7.x-1.44',
      ),
      'panels_mini' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/panels/panels_mini/panels_mini.module',
        'basename' => 'panels_mini.module',
        'name' => 'panels_mini',
        'info' => 
        array (
          'name' => 'Mini panels',
          'description' => 'Create mini panels that can be used as blocks by Drupal and panes by other panel modules.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/export_ui/panels_mini_ui.class.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'i18n_panels' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/panels/i18n_panels/i18n_panels.module',
        'basename' => 'i18n_panels.module',
        'name' => 'i18n_panels',
        'info' => 
        array (
          'name' => 'Panels translation',
          'description' => 'Supports translatable panels items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'panels',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels_node' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/panels/panels_node/panels_node.module',
        'basename' => 'panels_node.module',
        'name' => 'panels_node',
        'info' => 
        array (
          'name' => 'Panel nodes',
          'description' => 'Create nodes that are divided into areas with selectable content.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'configure' => 'admin/structure/panels',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'panels_node.module',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels_ipe' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/panels/panels_ipe/panels_ipe.module',
        'basename' => 'panels_ipe.module',
        'name' => 'panels_ipe',
        'info' => 
        array (
          'name' => 'Panels In-Place Editor',
          'description' => 'Provide a UI for managing some Panels directly on the frontend, instead of having to use the backend.',
          'package' => 'Panels',
          'dependencies' => 
          array (
            0 => 'panels',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/panels',
          'files' => 
          array (
            0 => 'panels_ipe.module',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'panels' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/panels/panels.module',
        'basename' => 'panels.module',
        'name' => 'panels',
        'info' => 
        array (
          'name' => 'Panels',
          'description' => 'Core Panels display functions; provides no external UI, at least one other Panels module should be enabled.',
          'core' => '7.x',
          'package' => 'Panels',
          'configure' => 'admin/structure/panels',
          'dependencies' => 
          array (
            0 => 'ctools (>=1.4)',
          ),
          'files' => 
          array (
            0 => 'panels.module',
            1 => 'includes/common.inc',
            2 => 'includes/legacy.inc',
            3 => 'includes/plugins.inc',
            4 => 'plugins/views/panels_views_plugin_row_fields.inc',
          ),
          'version' => '7.x-3.4',
          'project' => 'panels',
          'datestamp' => '1392221614',
          'php' => '5.2.4',
        ),
        'schema_version' => '7303',
        'project' => 'panels',
        'version' => '7.x-3.4',
      ),
      'feed_import_base' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/feed_import/feed_import_base/feed_import_base.module',
        'basename' => 'feed_import_base.module',
        'name' => 'feed_import_base',
        'info' => 
        array (
          'name' => 'Feed Import Base',
          'description' => 'Feed Import core functions',
          'package' => 'Feeds',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'inc/feed_import_abstract.inc',
            1 => 'inc/feed_import_filter.inc',
            2 => 'inc/feed_import_readers.inc',
            3 => 'inc/feed_import.inc',
          ),
          'configure' => 'admin/config/services/feed_import/settings',
          'version' => '7.x-3.3',
          'project' => 'feed_import',
          'datestamp' => '1403361228',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feed_import',
        'version' => '7.x-3.3',
      ),
      'feed_import' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/feed_import/feed_import.module',
        'basename' => 'feed_import.module',
        'name' => 'feed_import',
        'info' => 
        array (
          'name' => 'Feed Import',
          'description' => 'Imports content from various file types (like XML, HTML, CSV, JSON, ...) or from databases',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feed_import_base',
          ),
          'configure' => 'admin/config/services/feed_import',
          'version' => '7.x-3.3',
          'project' => 'feed_import',
          'datestamp' => '1403361228',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'feed_import',
        'version' => '7.x-3.3',
      ),
      'entity_rules' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entity_rules/entity_rules.module',
        'basename' => 'entity_rules.module',
        'name' => 'entity_rules',
        'info' => 
        array (
          'name' => 'Entity Rules',
          'description' => 'Provides UI for select Rules to execute during Entity Events',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'rules',
          ),
          'version' => '7.x-1.0-alpha4',
          'project' => 'entity_rules',
          'datestamp' => '1386645215',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'entity_rules',
        'version' => '7.x-1.0-alpha4',
      ),
      'chosen' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/chosen/chosen.module',
        'basename' => 'chosen.module',
        'name' => 'chosen',
        'info' => 
        array (
          'name' => 'Chosen',
          'description' => 'Makes select elements more user-friendly using <a href="http://harvesthq.github.com/chosen/">Chosen</a>.',
          'package' => 'User interface',
          'configure' => 'admin/config/user-interface/chosen',
          'core' => '7.x',
          'version' => '7.x-2.0-beta4',
          'project' => 'chosen',
          'datestamp' => '1394256505',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'chosen',
        'version' => '7.x-2.0-beta4',
      ),
      'eck_services' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/eck/modules/eck_services/eck_services.module',
        'basename' => 'eck_services.module',
        'name' => 'eck_services',
        'info' => 
        array (
          'name' => 'ECK Services',
          'description' => 'Service resources for ECK',
          'core' => '7.x',
          'package' => 'ECK',
          'dependencies' => 
          array (
            0 => 'eck',
            1 => 'services',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'eck',
          'datestamp' => '1406213356',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eck',
        'version' => '7.x-2.0-rc4',
      ),
      'eck_entitycache' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/eck/modules/eck_entitycache/eck_entitycache.module',
        'basename' => 'eck_entitycache.module',
        'name' => 'eck_entitycache',
        'info' => 
        array (
          'name' => 'ECK - Entitycache',
          'description' => 'Integrates the ECK module with the Entitycache module',
          'package' => 'Performance and scalability',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'eck',
            1 => 'entitycache',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'eck',
          'datestamp' => '1406213356',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eck',
        'version' => '7.x-2.0-rc4',
      ),
      'eck_example' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/eck/examples/eck_example.module',
        'basename' => 'eck_example.module',
        'name' => 'eck_example',
        'info' => 
        array (
          'name' => 'ECK Example',
          'description' => 'A module demonstrating the kind of things that ECK can do from code',
          'package' => 'ECK',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'eck',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'eck',
          'datestamp' => '1406213356',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eck',
        'version' => '7.x-2.0-rc4',
      ),
      'eck' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/eck/eck.module',
        'basename' => 'eck.module',
        'name' => 'eck',
        'info' => 
        array (
          'name' => 'Entity Construction Kit',
          'description' => 'ECK (Entity Construction Kit) Allows users to create and administer entity types, bundles, and entities from an easy to use UI',
          'package' => 'ECK',
          'core' => '7.x',
          'configure' => 'admin/structure/entity-type',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/handlers/eck_views_handler_field_link.inc',
            1 => 'views/handlers/eck_views_handler_field_link_edit.inc',
            2 => 'views/handlers/eck_views_handler_field_link_delete.inc',
            3 => 'includes/eck.inline_entity_form.inc',
          ),
          'version' => '7.x-2.0-rc4',
          'project' => 'eck',
          'datestamp' => '1406213356',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'eck',
        'version' => '7.x-2.0-rc4',
      ),
      'views_distinct' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_distinct/views_distinct.module',
        'basename' => 'views_distinct.module',
        'name' => 'views_distinct',
        'info' => 
        array (
          'name' => 'Views Distinct',
          'description' => 'Allow filtering/aggregating "distinct" Views result rows based on arbitrary fields.',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'views_distinct',
          'datestamp' => '1386601640',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_distinct',
        'version' => '7.x-1.0-rc1',
      ),
      'entityreference_plus' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityreference_plus/entityreference_plus.module',
        'basename' => 'entityreference_plus.module',
        'name' => 'entityreference_plus',
        'info' => 
        array (
          'name' => 'EntityReference Plus',
          'description' => 'This module extends EntityReference\'s widget.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
            2 => 'entityreference',
          ),
          'files' => 
          array (
            0 => 'views/entityreference_plus.views.inc',
            1 => 'views/handlers/views_entityreference_plus_field_handler_filter_in_operator.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'entityreference_plus',
          'datestamp' => '1381728003',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference_plus',
        'version' => '7.x-1.0',
      ),
      'peekaboo' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/peekaboo/peekaboo.module',
        'basename' => 'peekaboo.module',
        'name' => 'peekaboo',
        'info' => 
        array (
          'name' => 'Peekaboo; Ajax field formatter',
          'description' => 'Provides the ability to load the contents of a field via Ajax.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '7.x-2.0',
          'project' => 'peekaboo',
          'datestamp' => '1339852016',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'peekaboo',
        'version' => '7.x-2.0',
      ),
      'search_api_views' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/search_api/contrib/search_api_views/search_api_views.module',
        'basename' => 'search_api_views.module',
        'name' => 'search_api_views',
        'info' => 
        array (
          'name' => 'Search views',
          'description' => 'Integrates the Search API with Views, enabling users to create views with searches as filters or arguments.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'includes/display_facet_block.inc',
            1 => 'includes/handler_argument.inc',
            2 => 'includes/handler_argument_fulltext.inc',
            3 => 'includes/handler_argument_more_like_this.inc',
            4 => 'includes/handler_argument_string.inc',
            5 => 'includes/handler_argument_date.inc',
            6 => 'includes/handler_argument_taxonomy_term.inc',
            7 => 'includes/handler_filter.inc',
            8 => 'includes/handler_filter_boolean.inc',
            9 => 'includes/handler_filter_date.inc',
            10 => 'includes/handler_filter_entity.inc',
            11 => 'includes/handler_filter_fulltext.inc',
            12 => 'includes/handler_filter_language.inc',
            13 => 'includes/handler_filter_options.inc',
            14 => 'includes/handler_filter_taxonomy_term.inc',
            15 => 'includes/handler_filter_text.inc',
            16 => 'includes/handler_filter_user.inc',
            17 => 'includes/handler_sort.inc',
            18 => 'includes/plugin_cache.inc',
            19 => 'includes/query.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'search_api_facetapi' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/search_api/contrib/search_api_facetapi/search_api_facetapi.module',
        'basename' => 'search_api_facetapi.module',
        'name' => 'search_api_facetapi',
        'info' => 
        array (
          'name' => 'Search facets',
          'description' => 'Integrate the Search API with the Facet API to provide facetted searches.',
          'dependencies' => 
          array (
            0 => 'search_api',
            1 => 'facetapi',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'plugins/facetapi/adapter.inc',
            1 => 'plugins/facetapi/query_type_term.inc',
            2 => 'plugins/facetapi/query_type_date.inc',
          ),
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'search_api' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/search_api/search_api.module',
        'basename' => 'search_api.module',
        'name' => 'search_api',
        'info' => 
        array (
          'name' => 'Search API',
          'description' => 'Provides a generic API for modules offering search capabilites.',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'core' => '7.x',
          'package' => 'Search',
          'files' => 
          array (
            0 => 'search_api.test',
            1 => 'includes/callback.inc',
            2 => 'includes/callback_add_aggregation.inc',
            3 => 'includes/callback_add_hierarchy.inc',
            4 => 'includes/callback_add_url.inc',
            5 => 'includes/callback_add_viewed_entity.inc',
            6 => 'includes/callback_bundle_filter.inc',
            7 => 'includes/callback_comment_access.inc',
            8 => 'includes/callback_language_control.inc',
            9 => 'includes/callback_node_access.inc',
            10 => 'includes/callback_node_status.inc',
            11 => 'includes/callback_role_filter.inc',
            12 => 'includes/datasource.inc',
            13 => 'includes/datasource_entity.inc',
            14 => 'includes/datasource_external.inc',
            15 => 'includes/exception.inc',
            16 => 'includes/index_entity.inc',
            17 => 'includes/processor.inc',
            18 => 'includes/processor_highlight.inc',
            19 => 'includes/processor_html_filter.inc',
            20 => 'includes/processor_ignore_case.inc',
            21 => 'includes/processor_stopwords.inc',
            22 => 'includes/processor_tokenizer.inc',
            23 => 'includes/processor_transliteration.inc',
            24 => 'includes/query.inc',
            25 => 'includes/server_entity.inc',
            26 => 'includes/service.inc',
          ),
          'configure' => 'admin/config/search/search_api',
          'version' => '7.x-1.13',
          'project' => 'search_api',
          'datestamp' => '1406105328',
          'php' => '5.2.4',
        ),
        'schema_version' => '7117',
        'project' => 'search_api',
        'version' => '7.x-1.13',
      ),
      'views_arg_parent_term' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_arg_parent_term/views_arg_parent_term.module',
        'basename' => 'views_arg_parent_term.module',
        'name' => 'views_arg_parent_term',
        'info' => 
        array (
          'name' => 'Views parent term default argument',
          'description' => 'Provides a views default argument plugin for parent term',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'taxonomy',
          ),
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_parent_taxonomy_tid.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'views_arg_parent_term',
          'datestamp' => '1335794187',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_arg_parent_term',
        'version' => '7.x-1.1',
      ),
      'dhtml_menu' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/dhtml_menu/dhtml_menu.module',
        'basename' => 'dhtml_menu.module',
        'name' => 'dhtml_menu',
        'info' => 
        array (
          'name' => 'DHTML Menu',
          'description' => 'Opens menus dynamically to reduce page reloads.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dhtml_menu.module',
            1 => 'dhtml_menu.install',
            2 => 'dhtml_menu.admin.inc',
            3 => 'dhtml_menu.theme.inc',
          ),
          'version' => '7.x-1.0-beta1',
          'project' => 'dhtml_menu',
          'datestamp' => '1289339443',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'project' => 'dhtml_menu',
        'version' => '7.x-1.0-beta1',
      ),
      'entity2text' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entity2text/entity2text.module',
        'basename' => 'entity2text.module',
        'name' => 'entity2text',
        'info' => 
        array (
          'name' => 'Entity to Text',
          'description' => 'Provides API and Tokens for Rendering Entities to plain text',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entity_token',
          ),
          'package' => 'Other',
          'version' => '7.x-1.0-alpha2',
          'project' => 'entity2text',
          'datestamp' => '1387302523',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity2text',
        'version' => '7.x-1.0-alpha2',
      ),
      'session_api' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/session_api/session_api.module',
        'basename' => 'session_api.module',
        'name' => 'session_api',
        'info' => 
        array (
          'name' => 'Session API',
          'description' => 'Provides an interface for storing session information.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'session_api.module',
            1 => 'session_api.admin.inc',
            2 => 'session_api.install',
            3 => 'session_api.test',
          ),
          'configure' => 'admin/config/development/session-api',
          'version' => '7.x-1.0-rc1',
          'project' => 'session_api',
          'datestamp' => '1354234727',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'session_api',
        'version' => '7.x-1.0-rc1',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.8',
          'project' => 'views',
          'datestamp' => '1400618928',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.8',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_custom.inc',
            19 => 'handlers/views_handler_field_date.inc',
            20 => 'handlers/views_handler_field_entity.inc',
            21 => 'handlers/views_handler_field_markup.inc',
            22 => 'handlers/views_handler_field_math.inc',
            23 => 'handlers/views_handler_field_numeric.inc',
            24 => 'handlers/views_handler_field_prerender_list.inc',
            25 => 'handlers/views_handler_field_time_interval.inc',
            26 => 'handlers/views_handler_field_serialized.inc',
            27 => 'handlers/views_handler_field_machine_name.inc',
            28 => 'handlers/views_handler_field_url.inc',
            29 => 'handlers/views_handler_filter.inc',
            30 => 'handlers/views_handler_filter_boolean_operator.inc',
            31 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            32 => 'handlers/views_handler_filter_combine.inc',
            33 => 'handlers/views_handler_filter_date.inc',
            34 => 'handlers/views_handler_filter_equality.inc',
            35 => 'handlers/views_handler_filter_entity_bundle.inc',
            36 => 'handlers/views_handler_filter_group_by_numeric.inc',
            37 => 'handlers/views_handler_filter_in_operator.inc',
            38 => 'handlers/views_handler_filter_many_to_one.inc',
            39 => 'handlers/views_handler_filter_numeric.inc',
            40 => 'handlers/views_handler_filter_string.inc',
            41 => 'handlers/views_handler_filter_fields_compare.inc',
            42 => 'handlers/views_handler_relationship.inc',
            43 => 'handlers/views_handler_relationship_groupwise_max.inc',
            44 => 'handlers/views_handler_sort.inc',
            45 => 'handlers/views_handler_sort_date.inc',
            46 => 'handlers/views_handler_sort_formula.inc',
            47 => 'handlers/views_handler_sort_group_by_numeric.inc',
            48 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            49 => 'handlers/views_handler_sort_random.inc',
            50 => 'includes/base.inc',
            51 => 'includes/handlers.inc',
            52 => 'includes/plugins.inc',
            53 => 'includes/view.inc',
            54 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            55 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            58 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            61 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            62 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            63 => 'modules/book/views_plugin_argument_default_book_root.inc',
            64 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            65 => 'modules/comment/views_handler_field_comment.inc',
            66 => 'modules/comment/views_handler_field_comment_depth.inc',
            67 => 'modules/comment/views_handler_field_comment_link.inc',
            68 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            69 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            70 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            71 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            72 => 'modules/comment/views_handler_field_comment_node_link.inc',
            73 => 'modules/comment/views_handler_field_comment_username.inc',
            74 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            75 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            76 => 'modules/comment/views_handler_field_node_comment.inc',
            77 => 'modules/comment/views_handler_field_node_new_comments.inc',
            78 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            79 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            80 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            81 => 'modules/comment/views_handler_filter_node_comment.inc',
            82 => 'modules/comment/views_handler_sort_comment_thread.inc',
            83 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            84 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            85 => 'modules/comment/views_plugin_row_comment_rss.inc',
            86 => 'modules/comment/views_plugin_row_comment_view.inc',
            87 => 'modules/contact/views_handler_field_contact_link.inc',
            88 => 'modules/field/views_handler_field_field.inc',
            89 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            90 => 'modules/field/views_handler_argument_field_list.inc',
            91 => 'modules/field/views_handler_argument_field_list_string.inc',
            92 => 'modules/field/views_handler_filter_field_list.inc',
            93 => 'modules/filter/views_handler_field_filter_format_name.inc',
            94 => 'modules/locale/views_handler_field_node_language.inc',
            95 => 'modules/locale/views_handler_filter_node_language.inc',
            96 => 'modules/locale/views_handler_argument_locale_group.inc',
            97 => 'modules/locale/views_handler_argument_locale_language.inc',
            98 => 'modules/locale/views_handler_field_locale_group.inc',
            99 => 'modules/locale/views_handler_field_locale_language.inc',
            100 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            101 => 'modules/locale/views_handler_filter_locale_group.inc',
            102 => 'modules/locale/views_handler_filter_locale_language.inc',
            103 => 'modules/locale/views_handler_filter_locale_version.inc',
            104 => 'modules/node/views_handler_argument_dates_various.inc',
            105 => 'modules/node/views_handler_argument_node_language.inc',
            106 => 'modules/node/views_handler_argument_node_nid.inc',
            107 => 'modules/node/views_handler_argument_node_type.inc',
            108 => 'modules/node/views_handler_argument_node_vid.inc',
            109 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            110 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            111 => 'modules/node/views_handler_field_node.inc',
            112 => 'modules/node/views_handler_field_node_link.inc',
            113 => 'modules/node/views_handler_field_node_link_delete.inc',
            114 => 'modules/node/views_handler_field_node_link_edit.inc',
            115 => 'modules/node/views_handler_field_node_revision.inc',
            116 => 'modules/node/views_handler_field_node_revision_link.inc',
            117 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            118 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            119 => 'modules/node/views_handler_field_node_path.inc',
            120 => 'modules/node/views_handler_field_node_type.inc',
            121 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            122 => 'modules/node/views_handler_filter_node_access.inc',
            123 => 'modules/node/views_handler_filter_node_status.inc',
            124 => 'modules/node/views_handler_filter_node_type.inc',
            125 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            126 => 'modules/node/views_plugin_argument_default_node.inc',
            127 => 'modules/node/views_plugin_argument_validate_node.inc',
            128 => 'modules/node/views_plugin_row_node_rss.inc',
            129 => 'modules/node/views_plugin_row_node_view.inc',
            130 => 'modules/profile/views_handler_field_profile_date.inc',
            131 => 'modules/profile/views_handler_field_profile_list.inc',
            132 => 'modules/profile/views_handler_filter_profile_selection.inc',
            133 => 'modules/search/views_handler_argument_search.inc',
            134 => 'modules/search/views_handler_field_search_score.inc',
            135 => 'modules/search/views_handler_filter_search.inc',
            136 => 'modules/search/views_handler_sort_search_score.inc',
            137 => 'modules/search/views_plugin_row_search_view.inc',
            138 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            139 => 'modules/system/views_handler_argument_file_fid.inc',
            140 => 'modules/system/views_handler_field_file.inc',
            141 => 'modules/system/views_handler_field_file_extension.inc',
            142 => 'modules/system/views_handler_field_file_filemime.inc',
            143 => 'modules/system/views_handler_field_file_uri.inc',
            144 => 'modules/system/views_handler_field_file_status.inc',
            145 => 'modules/system/views_handler_filter_file_status.inc',
            146 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            147 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            148 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            149 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            150 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            151 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            152 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            153 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            154 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            155 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            156 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            157 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            158 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            159 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            160 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            161 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            162 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            163 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            164 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            165 => 'modules/system/views_handler_filter_system_type.inc',
            166 => 'modules/translation/views_handler_argument_node_tnid.inc',
            167 => 'modules/translation/views_handler_field_node_link_translate.inc',
            168 => 'modules/translation/views_handler_field_node_translation_link.inc',
            169 => 'modules/translation/views_handler_filter_node_tnid.inc',
            170 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            171 => 'modules/translation/views_handler_relationship_translation.inc',
            172 => 'modules/user/views_handler_argument_user_uid.inc',
            173 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            174 => 'modules/user/views_handler_field_user.inc',
            175 => 'modules/user/views_handler_field_user_language.inc',
            176 => 'modules/user/views_handler_field_user_link.inc',
            177 => 'modules/user/views_handler_field_user_link_cancel.inc',
            178 => 'modules/user/views_handler_field_user_link_edit.inc',
            179 => 'modules/user/views_handler_field_user_mail.inc',
            180 => 'modules/user/views_handler_field_user_name.inc',
            181 => 'modules/user/views_handler_field_user_permissions.inc',
            182 => 'modules/user/views_handler_field_user_picture.inc',
            183 => 'modules/user/views_handler_field_user_roles.inc',
            184 => 'modules/user/views_handler_filter_user_current.inc',
            185 => 'modules/user/views_handler_filter_user_name.inc',
            186 => 'modules/user/views_handler_filter_user_permissions.inc',
            187 => 'modules/user/views_handler_filter_user_roles.inc',
            188 => 'modules/user/views_plugin_argument_default_current_user.inc',
            189 => 'modules/user/views_plugin_argument_default_user.inc',
            190 => 'modules/user/views_plugin_argument_validate_user.inc',
            191 => 'modules/user/views_plugin_row_user_view.inc',
            192 => 'plugins/views_plugin_access.inc',
            193 => 'plugins/views_plugin_access_none.inc',
            194 => 'plugins/views_plugin_access_perm.inc',
            195 => 'plugins/views_plugin_access_role.inc',
            196 => 'plugins/views_plugin_argument_default.inc',
            197 => 'plugins/views_plugin_argument_default_php.inc',
            198 => 'plugins/views_plugin_argument_default_fixed.inc',
            199 => 'plugins/views_plugin_argument_default_raw.inc',
            200 => 'plugins/views_plugin_argument_validate.inc',
            201 => 'plugins/views_plugin_argument_validate_numeric.inc',
            202 => 'plugins/views_plugin_argument_validate_php.inc',
            203 => 'plugins/views_plugin_cache.inc',
            204 => 'plugins/views_plugin_cache_none.inc',
            205 => 'plugins/views_plugin_cache_time.inc',
            206 => 'plugins/views_plugin_display.inc',
            207 => 'plugins/views_plugin_display_attachment.inc',
            208 => 'plugins/views_plugin_display_block.inc',
            209 => 'plugins/views_plugin_display_default.inc',
            210 => 'plugins/views_plugin_display_embed.inc',
            211 => 'plugins/views_plugin_display_extender.inc',
            212 => 'plugins/views_plugin_display_feed.inc',
            213 => 'plugins/views_plugin_display_page.inc',
            214 => 'plugins/views_plugin_exposed_form_basic.inc',
            215 => 'plugins/views_plugin_exposed_form.inc',
            216 => 'plugins/views_plugin_exposed_form_input_required.inc',
            217 => 'plugins/views_plugin_localization_core.inc',
            218 => 'plugins/views_plugin_localization.inc',
            219 => 'plugins/views_plugin_localization_none.inc',
            220 => 'plugins/views_plugin_pager.inc',
            221 => 'plugins/views_plugin_pager_full.inc',
            222 => 'plugins/views_plugin_pager_mini.inc',
            223 => 'plugins/views_plugin_pager_none.inc',
            224 => 'plugins/views_plugin_pager_some.inc',
            225 => 'plugins/views_plugin_query.inc',
            226 => 'plugins/views_plugin_query_default.inc',
            227 => 'plugins/views_plugin_row.inc',
            228 => 'plugins/views_plugin_row_fields.inc',
            229 => 'plugins/views_plugin_row_rss_fields.inc',
            230 => 'plugins/views_plugin_style.inc',
            231 => 'plugins/views_plugin_style_default.inc',
            232 => 'plugins/views_plugin_style_grid.inc',
            233 => 'plugins/views_plugin_style_list.inc',
            234 => 'plugins/views_plugin_style_jump_menu.inc',
            235 => 'plugins/views_plugin_style_mapping.inc',
            236 => 'plugins/views_plugin_style_rss.inc',
            237 => 'plugins/views_plugin_style_summary.inc',
            238 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            239 => 'plugins/views_plugin_style_summary_unformatted.inc',
            240 => 'plugins/views_plugin_style_table.inc',
            241 => 'tests/handlers/views_handlers.test',
            242 => 'tests/handlers/views_handler_area_text.test',
            243 => 'tests/handlers/views_handler_argument_null.test',
            244 => 'tests/handlers/views_handler_argument_string.test',
            245 => 'tests/handlers/views_handler_field.test',
            246 => 'tests/handlers/views_handler_field_boolean.test',
            247 => 'tests/handlers/views_handler_field_custom.test',
            248 => 'tests/handlers/views_handler_field_counter.test',
            249 => 'tests/handlers/views_handler_field_date.test',
            250 => 'tests/handlers/views_handler_field_file_extension.test',
            251 => 'tests/handlers/views_handler_field_file_size.test',
            252 => 'tests/handlers/views_handler_field_math.test',
            253 => 'tests/handlers/views_handler_field_url.test',
            254 => 'tests/handlers/views_handler_field_xss.test',
            255 => 'tests/handlers/views_handler_filter_combine.test',
            256 => 'tests/handlers/views_handler_filter_date.test',
            257 => 'tests/handlers/views_handler_filter_equality.test',
            258 => 'tests/handlers/views_handler_filter_in_operator.test',
            259 => 'tests/handlers/views_handler_filter_numeric.test',
            260 => 'tests/handlers/views_handler_filter_string.test',
            261 => 'tests/handlers/views_handler_sort_random.test',
            262 => 'tests/handlers/views_handler_sort_date.test',
            263 => 'tests/handlers/views_handler_sort.test',
            264 => 'tests/test_handlers/views_test_area_access.inc',
            265 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            266 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            267 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            268 => 'tests/plugins/views_plugin_display.test',
            269 => 'tests/styles/views_plugin_style_jump_menu.test',
            270 => 'tests/styles/views_plugin_style.test',
            271 => 'tests/styles/views_plugin_style_base.test',
            272 => 'tests/styles/views_plugin_style_mapping.test',
            273 => 'tests/styles/views_plugin_style_unformatted.test',
            274 => 'tests/views_access.test',
            275 => 'tests/views_analyze.test',
            276 => 'tests/views_basic.test',
            277 => 'tests/views_argument_default.test',
            278 => 'tests/views_argument_validator.test',
            279 => 'tests/views_exposed_form.test',
            280 => 'tests/field/views_fieldapi.test',
            281 => 'tests/views_glossary.test',
            282 => 'tests/views_groupby.test',
            283 => 'tests/views_handlers.test',
            284 => 'tests/views_module.test',
            285 => 'tests/views_pager.test',
            286 => 'tests/views_plugin_localization_test.inc',
            287 => 'tests/views_translatable.test',
            288 => 'tests/views_query.test',
            289 => 'tests/views_upgrade.test',
            290 => 'tests/views_test.views_default.inc',
            291 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            292 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            293 => 'tests/node/views_node_revision_relations.test',
            294 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            295 => 'tests/user/views_handler_field_user_name.test',
            296 => 'tests/user/views_user_argument_default.test',
            297 => 'tests/user/views_user_argument_validate.test',
            298 => 'tests/user/views_user.test',
            299 => 'tests/views_cache.test',
            300 => 'tests/views_view.test',
            301 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.8',
          'project' => 'views',
          'datestamp' => '1400618928',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.8',
      ),
      'textformatter_contrib' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/textformatter/textformatter_contrib/textformatter_contrib.module',
        'basename' => 'textformatter_contrib.module',
        'name' => 'textformatter_contrib',
        'info' => 
        array (
          'name' => 'Text formatter contrib',
          'description' => 'Textformatter support for contributed modules.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'textformatter',
          ),
          'version' => '7.x-1.3',
          'project' => 'textformatter',
          'datestamp' => '1339240633',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'textformatter',
        'version' => '7.x-1.3',
      ),
      'textformatter' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/textformatter/textformatter.module',
        'basename' => 'textformatter.module',
        'name' => 'textformatter',
        'info' => 
        array (
          'name' => 'Text formatter',
          'description' => 'A field formatter for rendering values as HTML or comma-separated lists.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'version' => '7.x-1.3',
          'project' => 'textformatter',
          'datestamp' => '1339240633',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'textformatter',
        'version' => '7.x-1.3',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.5',
          'project' => 'entity',
          'datestamp' => '1396975454',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.5',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Display Suite Extras',
          'description' => 'Contains additional features for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Display Suite Forms',
          'description' => 'Manage the layout of forms in Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_devel' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_devel/ds_devel.module',
        'basename' => 'ds_devel.module',
        'name' => 'ds_devel',
        'info' => 
        array (
          'name' => 'Display Suite Devel',
          'description' => 'Development functionality for Display Suite.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
            1 => 'devel',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Display Suite Search',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/search',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_format' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_format/ds_format.module',
        'basename' => 'ds_format.module',
        'name' => 'ds_format',
        'info' => 
        array (
          'name' => 'Display Suite Format',
          'description' => 'Provides the Display Suite Code format filter.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/list/extras',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds_ui' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/modules/ds_ui/ds_ui.module',
        'basename' => 'ds_ui.module',
        'name' => 'ds_ui',
        'info' => 
        array (
          'name' => 'Display Suite UI',
          'description' => 'User interface for managing fields, view modes and classes.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display Suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display Suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.views.test',
            7 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-2.7',
          'project' => 'ds',
          'datestamp' => '1414483431',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'ds',
        'version' => '7.x-2.7',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'rules',
          'datestamp' => '1399041230',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'rules',
        'version' => '7.x-2.7',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.7',
          'project' => 'rules',
          'datestamp' => '1399041230',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.7',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.7',
          'project' => 'rules',
          'datestamp' => '1399041230',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.7',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.7',
          'project' => 'rules',
          'datestamp' => '1399041230',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'project' => 'rules',
        'version' => '7.x-2.7',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'references',
          'datestamp' => '1360265821',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.1',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/exporters/webform_exporter_delimited.inc',
            1 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            3 => 'includes/exporters/webform_exporter.inc',
            4 => 'views/webform_handler_field_form_body.inc',
            5 => 'views/webform_handler_field_is_draft.inc',
            6 => 'views/webform_handler_field_node_link_edit.inc',
            7 => 'views/webform_handler_field_node_link_results.inc',
            8 => 'views/webform_handler_field_submission_count.inc',
            9 => 'views/webform_handler_field_submission_data.inc',
            10 => 'views/webform_handler_field_submission_link.inc',
            11 => 'views/webform_handler_field_webform_status.inc',
            12 => 'views/webform_handler_filter_is_draft.inc',
            13 => 'views/webform_handler_filter_submission_data.inc',
            14 => 'views/webform_handler_filter_webform_status.inc',
            15 => 'views/webform_plugin_row_submission_view.inc',
            16 => 'views/webform_handler_relationship_submission_data.inc',
            17 => 'views/webform.views.inc',
            18 => 'tests/components.test',
            19 => 'tests/conditionals.test',
            20 => 'tests/permissions.test',
            21 => 'tests/submission.test',
            22 => 'tests/webform.test',
          ),
          'version' => '7.x-4.1',
          'project' => 'webform',
          'datestamp' => '1412681932',
        ),
        'schema_version' => '7418',
        'project' => 'webform',
        'version' => '7.x-4.1',
      ),
      'schema' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/schema/schema.module',
        'basename' => 'schema.module',
        'name' => 'schema',
        'info' => 
        array (
          'name' => 'Schema',
          'description' => 'The Schema module provides functionality built on the Schema API.',
          'package' => 'Database',
          'core' => '7.x',
          'configure' => 'admin/structure/schema/settings',
          'files' => 
          array (
            0 => 'engines/mysql.inc',
            1 => 'engines/pgsql.inc',
            2 => 'tests/schema_regression.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'schema',
          'datestamp' => '1395608058',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'schema',
        'version' => '7.x-1.2',
      ),
      'clone' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/node_clone/clone.module',
        'basename' => 'clone.module',
        'name' => 'clone',
        'info' => 
        array (
          'name' => 'Node clone',
          'description' => 'Allows users to clone (copy then edit) an existing node.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/views_handler_field_node_link_clone.inc',
          ),
          'configure' => 'admin/config/content/clone',
          'version' => '7.x-1.0-rc2',
          'project' => 'node_clone',
          'datestamp' => '1386176910',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'node_clone',
        'version' => '7.x-1.0-rc2',
      ),
      'entityform_notifications' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityform/entityform_notifications/entityform_notifications.module',
        'basename' => 'entityform_notifications.module',
        'name' => 'entityform_notifications',
        'info' => 
        array (
          'name' => 'Entityforms Notifications',
          'description' => 'Enable this module if you want Entityforms to send e-mail notifications when a form is submitted.',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'entityform',
            1 => 'entity_rules',
            2 => 'entity2text',
            3 => 'rules',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'entityform',
          'datestamp' => '1413913852',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'entityform',
        'version' => '7.x-2.0-rc1',
      ),
      'entityform_test' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityform/entityform_test/entityform_test.module',
        'basename' => 'entityform_test.module',
        'name' => 'entityform_test',
        'info' => 
        array (
          'name' => 'entityform_test',
          'description' => 'Feature for Entityform simpletest',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'entityform',
            2 => 'features',
            3 => 'field_sql_storage',
            4 => 'text',
          ),
          'features' => 
          array (
            'entityform_type' => 
            array (
              0 => 'simpletest_entityform',
            ),
            'features_api' => 
            array (
              0 => 'api:1',
            ),
            'field' => 
            array (
              0 => 'entityform-simpletest_entityform-field_text',
            ),
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'entityform',
          'datestamp' => '1413913852',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityform',
        'version' => '7.x-2.0-rc1',
      ),
      'entityform_anonymous' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityform/entityform_anonymous/entityform_anonymous.module',
        'basename' => 'entityform_anonymous.module',
        'name' => 'entityform_anonymous',
        'info' => 
        array (
          'name' => 'Entityform Anonymous',
          'description' => 'Allows tracking of anonymous Entityform submissions',
          'core' => '7.x',
          'package' => 'Entityforms',
          'dependencies' => 
          array (
            0 => 'session_api',
            1 => 'entityform',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'entityform',
          'datestamp' => '1413913852',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityform',
        'version' => '7.x-2.0-rc1',
      ),
      'entityform' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityform/entityform.module',
        'basename' => 'entityform.module',
        'name' => 'entityform',
        'info' => 
        array (
          'name' => 'Entityforms',
          'description' => 'Provides fieldable entity forms',
          'core' => '7.x',
          'package' => 'Entityforms',
          'configure' => 'admin/structure/entityform_types',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'entityform.admin.inc',
            1 => 'entityform.info.inc',
            2 => 'entityform_type.admin.inc',
            3 => 'entityform.pages.admin.inc',
            4 => 'views/entityform.views.inc',
            5 => 'views/entityform_handler_link_field.inc',
            6 => 'views/entityform_handler_delete_link_field.inc',
            7 => 'views/entityform_handler_edit_link_field.inc',
            8 => 'views/entityform_handler_entityform_operations_field.inc',
            9 => 'views/entityform.views_default.inc',
            10 => 'views/entityform_type_handler_submit_link_field.inc',
            11 => 'entityform.test',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'entityform',
          'datestamp' => '1413913852',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'entityform',
        'version' => '7.x-2.0-rc1',
      ),
      'masquerade' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/masquerade/masquerade.module',
        'basename' => 'masquerade.module',
        'name' => 'masquerade',
        'info' => 
        array (
          'name' => 'Masquerade',
          'description' => 'This module allows permitted users to masquerade as other users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'masquerade.test',
          ),
          'configure' => 'admin/config/people/masquerade',
          'version' => '7.x-1.0-rc7',
          'project' => 'masquerade',
          'datestamp' => '1394333639',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'masquerade',
        'version' => '7.x-1.0-rc7',
      ),
      'imce' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/imce/imce.module',
        'basename' => 'imce.module',
        'name' => 'imce',
        'info' => 
        array (
          'name' => 'IMCE',
          'description' => 'An image/file uploader and browser supporting personal directories and user quota.',
          'core' => '7.x',
          'package' => 'Media',
          'configure' => 'admin/config/media/imce',
          'version' => '7.x-1.9',
          'project' => 'imce',
          'datestamp' => '1400275428',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'imce',
        'version' => '7.x-1.9',
      ),
      'synonyms' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/synonyms/synonyms.module',
        'basename' => 'synonyms.module',
        'name' => 'synonyms',
        'info' => 
        array (
          'name' => 'Synonyms',
          'description' => 'Provides synonyms feature for working with Drupal Taxonomy',
          'package' => 'Taxonomy',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'text',
          ),
          'files' => 
          array (
            0 => 'synonyms.test',
            1 => 'includes/AbstractSynonymsExtractor.class.inc',
            2 => 'includes/SynonymsSynonymsExtractor.class.inc',
            3 => 'includes/TaxonomySynonymsExtractor.class.inc',
            4 => 'includes/EntityReferenceSynonymsExtractor.class.inc',
            5 => 'views/synonyms.views.inc',
            6 => 'views/synonyms_views_plugin_argument_validate_taxonomy_term.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'synonyms',
          'datestamp' => '1410753528',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'project' => 'synonyms',
        'version' => '7.x-1.2',
      ),
      'field_conditional_state' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/field_conditional_state/field_conditional_state.module',
        'basename' => 'field_conditional_state.module',
        'name' => 'field_conditional_state',
        'info' => 
        array (
          'name' => 'Field Conditional State',
          'description' => 'Set form field states attributes based on the values selected in other form fields using Drupal\'s states API',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'system (>=7.14)',
          ),
          'files' => 
          array (
            0 => 'field_conditional_state.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'field_conditional_state',
          'datestamp' => '1412096533',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'field_conditional_state',
        'version' => '7.x-2.1',
      ),
      'jqmulti' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jqmulti/jqmulti.module',
        'basename' => 'jqmulti.module',
        'name' => 'jqmulti',
        'info' => 
        array (
          'name' => 'jQuery Multi',
          'description' => 'Runs a second version of jQuery in parallel to Drupal\'s version, and allows for targeting of files and libraries to the second version.',
          'core' => '7.x',
          'configure' => 'admin/config/system/jqmulti',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'version' => '7.x-1.0',
          'project' => 'jqmulti',
          'datestamp' => '1382928333',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'project' => 'jqmulti',
        'version' => '7.x-1.0',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.2',
          'project' => 'pathauto',
          'datestamp' => '1344525185',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.2',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'entityreference',
          'datestamp' => '1384973110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entityreference',
        'version' => '7.x-1.1',
      ),
      'entityreference_filter' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityreference_filter/entityreference_filter.module',
        'basename' => 'entityreference_filter.module',
        'name' => 'entityreference_filter',
        'info' => 
        array (
          'name' => 'Views Reference Filter',
          'description' => 'Provides views-based filter for entity reference and entity id fields in views.',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'entityreference',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/entityreference_filter_view_result.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'entityreference_filter',
          'datestamp' => '1414412008',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference_filter',
        'version' => '7.x-1.3',
      ),
      'multiple_email' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/multiple_email/multiple_email.module',
        'basename' => 'multiple_email.module',
        'name' => 'multiple_email',
        'info' => 
        array (
          'name' => 'Multiple E-mail Addresses',
          'description' => 'Allows users to have more than one registered e-mail address',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'multiple_email.test',
            1 => 'views/multiple_email_handler_filter_current.inc',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'multiple_email',
          'datestamp' => '1382628928',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'multiple_email',
        'version' => '7.x-1.0-beta3',
      ),
      'jammer_generic' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jammer/jammer_generic.module',
        'basename' => 'jammer_generic.module',
        'name' => 'jammer_generic',
        'info' => 
        array (
          'name' => 'Generic Jammer',
          'description' => 'Remove configured form elements from forms.',
          'package' => 'Jammer',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jammer_generic.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'jammer',
          'datestamp' => '1357159949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jammer',
        'version' => '7.x-1.3',
      ),
      'jammer' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jammer/jammer.module',
        'basename' => 'jammer.module',
        'name' => 'jammer',
        'info' => 
        array (
          'name' => 'Content Form Jammer',
          'description' => 'Remove or hide parts of forms.',
          'package' => 'Jammer',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jammer.module',
            1 => 'jammer.install',
            2 => 'jammer.test',
          ),
          'version' => '7.x-1.3',
          'project' => 'jammer',
          'datestamp' => '1357159949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jammer',
        'version' => '7.x-1.3',
      ),
      'jammer_messages' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jammer/jammer_messages.module',
        'basename' => 'jammer_messages.module',
        'name' => 'jammer_messages',
        'info' => 
        array (
          'name' => 'Message Jammer',
          'description' => 'Filter status messages set by drupal_set_message().',
          'package' => 'Jammer',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jammer_messages.install',
            1 => 'jammer_messages.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'jammer',
          'datestamp' => '1357159949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jammer',
        'version' => '7.x-1.3',
      ),
      'jammer_feed' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jammer/jammer_feed.module',
        'basename' => 'jammer_feed.module',
        'name' => 'jammer_feed',
        'info' => 
        array (
          'name' => 'Feed Jammer',
          'description' => 'Prevent the loading of the default RSS feed at /rss.xml',
          'package' => 'Jammer',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jammer_feed.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'jammer',
          'datestamp' => '1357159949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jammer',
        'version' => '7.x-1.3',
      ),
      'jammer_feed_icon' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/jammer/jammer_feed_icon.module',
        'basename' => 'jammer_feed_icon.module',
        'name' => 'jammer_feed_icon',
        'info' => 
        array (
          'name' => 'Feed Icon Jammer',
          'description' => 'Remove the feed icon from themes that use the PHPTemplate engine. No configuration needed.',
          'package' => 'Jammer',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jammer_feed_icon.module',
          ),
          'version' => '7.x-1.3',
          'project' => 'jammer',
          'datestamp' => '1357159949',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'jammer',
        'version' => '7.x-1.3',
      ),
      'taxonomy_csv' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/taxonomy_csv/taxonomy_csv.module',
        'basename' => 'taxonomy_csv.module',
        'name' => 'taxonomy_csv',
        'info' => 
        array (
          'name' => 'Taxonomy CSV import/export',
          'description' => 'Export and import complete taxonomies, hierarchical structure or simple lists of terms and fields to or from a CSV file, url or text.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'package' => 'Taxonomy',
          'project' => 'taxonomy_csv',
          'version' => '7.x-5.10',
          'files' => 
          array (
            0 => 'taxonomy_csv.install',
            1 => 'taxonomy_csv.module',
            2 => 'taxonomy_csv.api.inc',
            3 => 'taxonomy_csv.vocabulary.api.inc',
            4 => 'taxonomy_csv.term.api.inc',
            5 => 'taxonomy_csv.result.inc',
            6 => 'import/taxonomy_csv.import.admin.inc',
            7 => 'import/taxonomy_csv.import.api.inc',
            8 => 'import/taxonomy_csv.import.line.api.inc',
            9 => 'import/taxonomy_csv.import.result.inc',
            10 => 'export/taxonomy_csv.export.admin.inc',
            11 => 'export/taxonomy_csv.export.api.inc',
            12 => 'export/taxonomy_csv.export.result.inc',
          ),
          'datestamp' => '1329924048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'taxonomy_csv',
        'version' => '7.x-5.10',
      ),
      'hs_flatlist' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/modules/hs_flatlist.module',
        'basename' => 'hs_flatlist.module',
        'name' => 'hs_flatlist',
        'info' => 
        array (
          'name' => 'Hierarchical Select Flat List',
          'description' => 'Allows Hierarchical Select\'s dropbox to be used for selecting multiple items in a flat list of options.',
          'dependencies' => 
          array (
            0 => 'hierarchical_select',
          ),
          'package' => 'Form Elements',
          'core' => '7.x',
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'hs_smallhierarchy' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/modules/hs_smallhierarchy.module',
        'basename' => 'hs_smallhierarchy.module',
        'name' => 'hs_smallhierarchy',
        'info' => 
        array (
          'name' => 'Hierarchical Select Small Hierarchy',
          'description' => 'Allows Hierarchical Select to be used for a hardcoded hierarchy. When it becomes to slow, you should move the hierarchy into the database and write a proper implementation.',
          'dependencies' => 
          array (
            0 => 'hierarchical_select',
          ),
          'package' => 'Form Elements',
          'core' => '7.x',
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'hs_taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/modules/hs_taxonomy.module',
        'basename' => 'hs_taxonomy.module',
        'name' => 'hs_taxonomy',
        'info' => 
        array (
          'name' => 'Hierarchical Select Taxonomy',
          'description' => 'Use Hierarchical Select for Taxonomy.',
          'dependencies' => 
          array (
            0 => 'hierarchical_select',
            1 => 'taxonomy',
          ),
          'package' => 'Form Elements',
          'core' => '7.x',
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'hs_menu' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/modules/hs_menu.module',
        'basename' => 'hs_menu.module',
        'name' => 'hs_menu',
        'info' => 
        array (
          'name' => 'Hierarchical Select Menu',
          'description' => 'Use Hierarchical Select for menu parent selection.',
          'dependencies' => 
          array (
            0 => 'hierarchical_select',
            1 => 'menu',
          ),
          'package' => 'Form Elements',
          'core' => '7.x',
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'hs_taxonomy_views' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/modules/hs_taxonomy_views.module',
        'basename' => 'hs_taxonomy_views.module',
        'name' => 'hs_taxonomy_views',
        'info' => 
        array (
          'name' => 'Hierarchical Select Taxonomy Views',
          'description' => 'Use Hierarchical Select for Taxonomy exposed filters in Views.',
          'dependencies' => 
          array (
            0 => 'hierarchical_select',
            1 => 'hs_taxonomy',
            2 => 'views',
          ),
          'package' => 'Form Elements',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'hs_taxonomy_views_handler_filter_term_node_tid.inc',
          ),
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'hierarchical_select' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/hierarchical_select/hierarchical_select.module',
        'basename' => 'hierarchical_select.module',
        'name' => 'hierarchical_select',
        'info' => 
        array (
          'name' => 'Hierarchical Select',
          'description' => 'Simplifies the selection of one or multiple items in a hierarchical tree.',
          'package' => 'Form Elements',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/internals.test',
          ),
          'version' => '7.x-3.0-alpha6',
          'project' => 'hierarchical_select',
          'datestamp' => '1378129321',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'hierarchical_select',
        'version' => '7.x-3.0-alpha6',
      ),
      'entityreference_view_widget' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/entityreference_view_widget/entityreference_view_widget.module',
        'basename' => 'entityreference_view_widget.module',
        'name' => 'entityreference_view_widget',
        'info' => 
        array (
          'name' => 'Entity Reference View Widget',
          'description' => 'Provides a complex widget that embeds a view for selecting items.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
            1 => 'views',
            2 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/entityreference_view_widget_handler_field_checkbox.inc',
            1 => 'views/entityreference_view_widget_plugin_display.inc',
          ),
          'version' => '7.x-2.0-rc3',
          'project' => 'entityreference_view_widget',
          'datestamp' => '1411553629',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entityreference_view_widget',
        'version' => '7.x-2.0-rc3',
      ),
      'conditional_fields' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/conditional_fields/conditional_fields.module',
        'basename' => 'conditional_fields.module',
        'name' => 'conditional_fields',
        'info' => 
        array (
          'name' => 'Conditional Fields',
          'description' => 'Define dependencies between fields based on their states and values.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/structure/dependencies',
          'version' => '7.x-3.0-alpha1',
          'project' => 'conditional_fields',
          'datestamp' => '1384798705',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'conditional_fields',
        'version' => '7.x-3.0-alpha1',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.migrate.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'email',
          'datestamp' => '1397134155',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.3',
      ),
      'field_reference' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/field_reference/field_reference.module',
        'basename' => 'field_reference.module',
        'name' => 'field_reference',
        'info' => 
        array (
          'name' => 'Field reference',
          'description' => 'Defines a field type for referencing a field from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'field',
            2 => 'references',
            3 => 'options',
          ),
          'version' => '7.x-1.0',
          'project' => 'field_reference',
          'datestamp' => '1345432353',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'field_reference',
        'version' => '7.x-1.0',
      ),
      'views_slideshow_liquid_slider' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/views_slideshow_liquid_slider/views_slideshow_liquid_slider.module',
        'basename' => 'views_slideshow_liquid_slider.module',
        'name' => 'views_slideshow_liquid_slider',
        'info' => 
        array (
          'name' => 'Views Slideshow: Liquid Slider',
          'description' => 'Adds a jQuery Liquid Slider option to views slideshow',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_slideshow',
            2 => 'jqmulti',
            3 => 'libraries (2.x)',
          ),
          'scripts' => 
          array (
            0 => 'js/liquidslider.js',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'views_slideshow_liquid_slider',
          'datestamp' => '1402918431',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow_liquid_slider',
        'version' => '7.x-1.0',
      ),
      'css_injector' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/css_injector/css_injector.module',
        'basename' => 'css_injector.module',
        'name' => 'css_injector',
        'info' => 
        array (
          'name' => 'CSS Injector',
          'description' => 'Adds CSS to the page output based on configurable rules.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'css_injector.admin.inc',
            1 => 'css_injector.install',
            2 => 'css_injector.module',
            3 => 'css_injector.test',
          ),
          'configure' => 'admin/config/development/css-injector',
          'version' => '7.x-1.10',
          'project' => 'css_injector',
          'datestamp' => '1387292932',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'css_injector',
        'version' => '7.x-1.10',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.2+54-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1413622431',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'wysiwyg',
        'version' => '7.x-2.2+54-dev',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'ctools',
          'datestamp' => '1392220730',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6008',
        'project' => 'ctools',
        'version' => '7.x-1.4',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/libraries.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'libraries',
          'datestamp' => '1391965716',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'libraries',
        'version' => '7.x-2.2',
      ),
      'viewreference' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/viewreference/viewreference.module',
        'basename' => 'viewreference.module',
        'name' => 'viewreference',
        'info' => 
        array (
          'name' => 'View reference',
          'description' => 'Defines a field type for referencing a view from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-3.4',
          'project' => 'viewreference',
          'datestamp' => '1344228442',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'viewreference',
        'version' => '7.x-3.4',
      ),
      'reference_option_limit' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/reference_option_limit/reference_option_limit.module',
        'basename' => 'reference_option_limit.module',
        'name' => 'reference_option_limit',
        'info' => 
        array (
          'name' => 'Reference option limit',
          'description' => 'Allows reference fields to have their available options limited by the values of other fields in the current entity.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'reference_option_limit.module',
            1 => 'reference_option_limit.views.inc',
            2 => 'reference_option_limit_handler_filter_limited_options_term_reference.inc',
          ),
          'version' => '7.x-1.4',
          'project' => 'reference_option_limit',
          'datestamp' => '1371751257',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'reference_option_limit',
        'version' => '7.x-1.4',
      ),
      'om_tools' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/om_tools/om_tools.module',
        'basename' => 'om_tools.module',
        'name' => 'om_tools',
        'info' => 
        array (
          'name' => 'OM Tools',
          'package' => 'OM',
          'description' => 'OM Base Theme Tools Collection',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'om_tools.module',
            1 => 'om_tools.install',
            2 => 'inc/om_tools.admin.inc',
            3 => 'inc/om_tools.utils.inc',
          ),
          'configure' => 'admin/config/system/om-tools',
          'version' => '7.x-2.13',
          'project' => 'om_tools',
          'datestamp' => '1325989248',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'om_tools',
        'version' => '7.x-2.13',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'admin_menu',
          'datestamp' => '1359651687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc4',
      ),
      'data_entity' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/data/data_entity/data_entity.module',
        'basename' => 'data_entity.module',
        'name' => 'data_entity',
        'info' => 
        array (
          'name' => 'Data entity',
          'description' => 'Defines data tables as entity types.',
          'package' => 'Data',
          'dependencies' => 
          array (
            0 => 'data',
            1 => 'entity',
            2 => 'data_ui',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'data_entity.module',
            1 => 'data_entity.pages.inc',
            2 => 'data_entity.admin.inc',
            3 => 'data_entity.entity.inc',
            4 => 'views/data_entity.views.inc',
            5 => 'views/data_entity_views_handler_field_edit_link.inc',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'data',
          'datestamp' => '1390746506',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'data',
        'version' => '7.x-1.0-alpha6',
      ),
      'data_search' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/data/data_search/data_search.module',
        'basename' => 'data_search.module',
        'name' => 'data_search',
        'info' => 
        array (
          'name' => 'Data Search',
          'description' => 'Provides search and views search integration for Data tables.',
          'package' => 'Data',
          'dependencies' => 
          array (
            0 => 'data',
            1 => 'search',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha6',
          'project' => 'data',
          'datestamp' => '1390746506',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'data',
        'version' => '7.x-1.0-alpha6',
      ),
      'data_ui' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/data/data_ui/data_ui.module',
        'basename' => 'data_ui.module',
        'name' => 'data_ui',
        'info' => 
        array (
          'name' => 'Data Admin UI',
          'description' => 'Admin UI for Data Module',
          'package' => 'Data',
          'dependencies' => 
          array (
            0 => 'data',
            1 => 'schema',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha6',
          'project' => 'data',
          'datestamp' => '1390746506',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'data',
        'version' => '7.x-1.0-alpha6',
      ),
      'data' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/modules/data/data.module',
        'basename' => 'data.module',
        'name' => 'data',
        'info' => 
        array (
          'name' => 'Data',
          'description' => 'Provides two dimensional storage space for arbitrary data sets.',
          'package' => 'Data',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'data.module',
            1 => 'includes/DataHandler.inc',
            2 => 'includes/DataTable.inc',
            3 => 'tests/data.test',
            4 => 'tests/data.test.inc',
            5 => 'views/views_handler_field_data_markup.inc',
          ),
          'version' => '7.x-1.0-alpha6',
          'project' => 'data',
          'datestamp' => '1390746506',
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'project' => 'data',
        'version' => '7.x-1.0-alpha6',
      ),
    ),
    'themes' => 
    array (
      'om_subtheme' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/themes/om/om_subtheme/om_subtheme.info',
        'basename' => 'om_subtheme.info',
        'name' => 'OM Subtheme - Created by Admin',
        'info' => 
        array (
          'name' => 'OM Subtheme - Created by Admin',
          'description' => '"This a subtheme of OM Base Theme. For more info, read the <a href="http://drupal.org/node/1056254">OM Theme Documentation</a>"',
          'screenshot' => 'screenshot.png',
          'base theme' => 'om',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'head' => 
          array (
            'meta' => 
            array (
              'viewport' => 
              array (
                'initial-scale' => '1.0',
                'width' => 'device-width',
                'minimum-scale' => '0.5',
                'maximum-scale' => '1.0',
                'user-scalable' => 'yes',
              ),
              'MobileOptimized' => 'width',
              'HandheldFriendly' => 'true',
              'apple-mobile-web-app-capable' => 'yes',
              'cleartype' => 'on',
              'X-UA-Compatible' => 
              array (
                'IE' => 'edge',
                'chrome' => '1',
              ),
            ),
          ),
          'settings' => 
          array (
            'grid_guide' => 'on',
            'offline' => 
            array (
              'switch' => 'off',
              'message' => 'We\'re currently improving this site.',
            ),
            'countdown' => 
            array (
              'year' => '2012',
              'month' => '1',
              'days' => '1',
              'hours' => '0',
              'minutes' => '0',
              'seconds' => '0',
            ),
            'browsers' => 
            array (
              'known' => 'msie, firefox, safari, webkit, opera, netscape, konqueror, gecko',
              'class' => 'off',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/script.js',
          ),
          'regions' => 
          array (
            'header_block' => 'Header Block',
            'menu_bar' => 'Menu Bar',
            'highlighted' => 'Highlighted',
            'sidebar_first' => 'Sidebar - First (Left)',
            'sidebar_second' => 'Sidebar - Second (Right)',
            'content' => 'Content',
            'footer' => 'Footer',
          ),
          'version' => '7.x-2.21',
          'project' => 'om',
          'datestamp' => '1326183046',
        ),
        'project' => 'om',
        'version' => '7.x-2.21',
      ),
      'om' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/themes/om/core/om.info',
        'basename' => 'om.info',
        'name' => 'OM Base Theme',
        'info' => 
        array (
          'name' => 'OM Base Theme',
          'description' => '"For more info, read the <a href="http://drupal.org/node/1290584">OM Theme Documentation</a>"',
          'screenshot' => 'screenshot.png',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'head' => 
          array (
            'meta' => 
            array (
              'viewport' => 
              array (
                'initial-scale' => '1.0',
                'width' => 'device-width',
                'minimum-scale' => '0.5',
                'maximum-scale' => '1.0',
                'user-scalable' => 'yes',
              ),
              'MobileOptimized' => 'width',
              'HandheldFriendly' => 'true',
              'apple-mobile-web-app-capable' => 'yes',
              'cleartype' => 'on',
              'X-UA-Compatible' => 
              array (
                'IE' => 'edge',
                'chrome' => '1',
              ),
            ),
          ),
          'settings' => 
          array (
            'grid_guide' => 'on',
            'offline' => 
            array (
              'switch' => 'off',
              'message' => 'We\'re currently improving this site.',
            ),
            'countdown' => 
            array (
              'year' => '2012',
              'month' => '1',
              'days' => '1',
              'hours' => '0',
              'minutes' => '0',
              'seconds' => '0',
            ),
            'browsers' => 
            array (
              'known' => 'msie, firefox, safari, webkit, opera, netscape, konqueror, gecko',
              'class' => 'off',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/reset.css',
              1 => 'css/om.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/om.js',
          ),
          'regions' => 
          array (
            'header_block' => 'Header Block',
            'menu_bar' => 'Menu Bar',
            'highlighted' => 'Highlighted',
            'sidebar_first' => 'Sidebar - First (Left)',
            'sidebar_second' => 'Sidebar - Second (Right)',
            'content' => 'Content',
            'footer' => 'Footer',
          ),
          'version' => '7.x-2.21',
          'project' => 'om',
          'datestamp' => '1326183046',
        ),
        'project' => 'om',
        'version' => '7.x-2.21',
      ),
      'om_html5_subtheme' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/themes/om/om_html5_subtheme/om_html5_subtheme.info',
        'basename' => 'om_html5_subtheme.info',
        'name' => 'OM HTML5 Subtheme - Created by Admin',
        'info' => 
        array (
          'name' => 'OM HTML5 Subtheme - Created by Admin',
          'description' => '"This a subtheme of OM Base Theme. For more info, read the <a href="http://drupal.org/node/1056254">OM Theme Documentation</a>"',
          'screenshot' => 'screenshot.png',
          'base theme' => 'om',
          'core' => '7.x',
          'engine' => 'phptemplate',
          'head' => 
          array (
            'meta' => 
            array (
              'viewport' => 
              array (
                'initial-scale' => '1.0',
                'width' => 'device-width',
                'minimum-scale' => '0.5',
                'maximum-scale' => '1.0',
                'user-scalable' => 'yes',
              ),
              'MobileOptimized' => 'width',
              'HandheldFriendly' => 'true',
              'apple-mobile-web-app-capable' => 'yes',
              'cleartype' => 'on',
              'X-UA-Compatible' => 
              array (
                'IE' => 'edge',
                'chrome' => '1',
              ),
            ),
          ),
          'settings' => 
          array (
            'grid_guide' => 'on',
            'offline' => 
            array (
              'switch' => 'off',
              'message' => 'We\'re currently improving this site.',
            ),
            'countdown' => 
            array (
              'year' => '2012',
              'month' => '1',
              'days' => '1',
              'hours' => '0',
              'minutes' => '0',
              'seconds' => '0',
            ),
            'browsers' => 
            array (
              'known' => 'msie, firefox, safari, webkit, opera, netscape, konqueror, gecko',
              'class' => 'off',
            ),
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
            ),
          ),
          'scripts' => 
          array (
            0 => 'js/script.js',
          ),
          'regions' => 
          array (
            'header_block' => 'Header Block',
            'menu_bar' => 'Menu Bar',
            'highlighted' => 'Highlighted',
            'sidebar_first' => 'Sidebar - First (Left)',
            'sidebar_second' => 'Sidebar - Second (Right)',
            'content' => 'Content',
            'footer' => 'Footer',
          ),
          'version' => '7.x-2.21',
          'project' => 'om',
          'datestamp' => '1326183046',
        ),
        'project' => 'om',
        'version' => '7.x-2.21',
      ),
      'agerametro' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/themes/bootstrap/agerametro/agerametro.info',
        'basename' => 'agerametro.info',
        'name' => 'Agera Energy LLC "Metro" Theme',
        'info' => 
        array (
          'name' => 'Agera Energy LLC "Metro" Theme',
          'description' => 'This is a Bootstrap Sub-theme created for Agera Energy LLC by Adam John. <a href="mailto:aj@sterlingsolved.com">aj@sterlingsolved.com</a>',
          'core' => '7.x',
          'base theme' => 'bootstrap',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/style.css',
            ),
          ),
          'version' => NULL,
        ),
        'project' => '',
        'version' => NULL,
      ),
      'bootstrap' => 
      array (
        'filename' => '/var/aegir/projects/ageracom/20141201/sites/all/themes/bootstrap/bootstrap.info',
        'basename' => 'bootstrap.info',
        'name' => 'Bootstrap',
        'info' => 
        array (
          'name' => 'Bootstrap',
          'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
          'core' => '7.x',
          'regions' => 
          array (
            'navigation' => 'Navigation',
            'header' => 'Top Bar',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'sidebar_first' => 'Primary',
            'sidebar_second' => 'Secondary',
            'footer' => 'Footer',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
          ),
          'settings' => 
          array (
            'bootstrap_breadcrumb' => '1',
            'bootstrap_breadcrumb_home' => '0',
            'bootstrap_breadcrumb_title' => '1',
            'bootstrap_navbar_position' => '',
            'bootstrap_navbar_inverse' => '0',
            'bootstrap_region_well-navigation' => '',
            'bootstrap_region_well-header' => '',
            'bootstrap_region_well-highlighted' => '',
            'bootstrap_region_well-help' => '',
            'bootstrap_region_well-content' => '',
            'bootstrap_region_well-sidebar_first' => 'well',
            'bootstrap_region_well-sidebar_second' => '',
            'bootstrap_region_well-footer' => '',
            'bootstrap_anchors_fix' => '1',
            'bootstrap_anchors_smooth_scrolling' => '1',
            'bootstrap_popover_enabled' => '1',
            'bootstrap_popover_animation' => '1',
            'bootstrap_popover_html' => '0',
            'bootstrap_popover_placement' => 'right',
            'bootstrap_popover_selector' => '',
            'bootstrap_popover_trigger' => 
            array (
              '\'hover\'' => '0',
              '\'focus\'' => '0',
              '\'click\'' => 'click',
            ),
            'bootstrap_popover_title' => '',
            'bootstrap_popover_content' => '',
            'bootstrap_popover_delay' => '0',
            'bootstrap_popover_container' => 'body',
            'bootstrap_tooltip_enabled' => '1',
            'bootstrap_tooltip_descriptions' => '1',
            'bootstrap_tooltip_animation' => '1',
            'bootstrap_tooltip_html' => '0',
            'bootstrap_tooltip_placement' => 'auto left',
            'bootstrap_tooltip_selector' => '',
            'bootstrap_tooltip_trigger' => 
            array (
              '\'hover\'' => 'hover',
              '\'focus\'' => 'focus',
              '\'click\'' => '0',
            ),
            'bootstrap_tooltip_delay' => '0',
            'bootstrap_tooltip_container' => 'body',
            'bootstrap_cdn' => '3.0.2',
            'bootstrap_bootswatch' => '',
            'toggle_name' => '1',
            'toggle_search' => '1',
          ),
          'exclude' => 
          array (
            'css' => 
            array (
              0 => 'misc/vertical-tabs.css',
              1 => 'modules/aggregator/aggregator.css',
              2 => 'modules/book/book.css',
              3 => 'modules/comment/comment.css',
              4 => 'modules/dblog/dblog.css',
              5 => 'modules/file/file.css',
              6 => 'modules/filter/filter.css',
              7 => 'modules/forum/forum.css',
              8 => 'modules/help/help.css',
              9 => 'modules/menu/menu.css',
              10 => 'modules/node/node.css',
              11 => 'modules/openid/openid.css',
              12 => 'modules/poll/poll.css',
              13 => 'modules/search/search.css',
              14 => 'modules/statistics/statistics.css',
              15 => 'modules/syslog/syslog.css',
              16 => 'modules/system/maintenance.css',
              17 => 'modules/system/system.maintenance.css',
              18 => 'modules/system/system.menus.css',
              19 => 'modules/system/system.messages.css',
              20 => 'modules/system/system.theme.css',
              21 => 'modules/taxonomy/taxonomy.css',
              22 => 'modules/tracker/tracker.css',
              23 => 'modules/update/update.css',
              24 => 'modules/user/user.css',
            ),
          ),
          'simplytest_dependencies' => 
          array (
            0 => 'jquery_update',
          ),
          'version' => '7.x-3.0',
          'project' => 'bootstrap',
          'datestamp' => '1384678107',
        ),
        'project' => 'bootstrap',
        'version' => '7.x-3.0',
      ),
    ),
  ),
  'profiles' => 
  array (
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);