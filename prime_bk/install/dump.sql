CREATE TABLE IF NOT EXISTS #PREFIX#settings (
	settings_name VARCHAR(255) NOT NULL,
	settings_value TEXT NOT NULL DEFAULT '',
	settings_type VARCHAR(12) NOT NULL DEFAULT 'text',
	settings_attributes TEXT NOT NULL DEFAULT '',
	settings_title TEXT(1024) NOT NULL DEFAULT '',
	settings_description TEXT(4192) NOT NULL DEFAULT '',
	settings_ordering INT UNSIGNED NOT NULL DEFAULT 100,
	PRIMARY KEY (settings_name)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT IGNORE INTO #PREFIX#settings (settings_name, settings_value, settings_type, settings_attributes, settings_title, settings_description, settings_ordering)
	 VALUES
		('website_language', 'russian', 'select', 'a:2:{s:7:"russian";s:7:"Russian";s:7:"english";s:7:"English";}', 'Web Site Language', 'Default Web Site Language', 1),
		('website_email', '', 'text', '', 'Administrative Email', 'Administrative Email for technical and information use', 2),
		('website_backup_number', '3', 'text', '', 'Number of backups', 'Keep several copies of backups', 3);

CREATE TABLE IF NOT EXISTS #PREFIX#modules (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(128) UNIQUE NOT NULL DEFAULT '',
	status INT UNSIGNED NOT NULL DEFAULT 1,
	ordering INT NOT NULL DEFAULT 1,
	PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
