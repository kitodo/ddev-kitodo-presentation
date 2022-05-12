<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$TXFJeXJoc3BOQXEwdHYxcw$zdkT+1U4CMMzdcJyEu+CE0b8vd0v7YqAeoshYKmTmQM',
        'languageDebug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'dlf' => [
            'caching' => '0',
            'enableInternalProxy' => '0',
            'fileGrpAudio' => 'AUDIO',
            'fileGrpDownload' => 'DOWNLOAD',
            'fileGrpFulltext' => 'FULLTEXT',
            'fileGrpImages' => 'DEFAULT,MAX',
            'fileGrpThumbs' => 'THUMBS',
            'forceAbsoluteUrl' => '0',
            'forceAbsoluteUrlHttps' => '0',
            'iiifThumbnailHeight' => '150',
            'iiifThumbnailWidth' => '150',
            'indexAnnotations' => '0',
            'publishNewCollections' => '1',
            'solrAllowCoreDelete' => '0',
            'solrConnect' => '0',
            'solrFieldAutocomplete' => 'autocomplete',
            'solrFieldCollection' => 'collection',
            'solrFieldDefault' => 'default',
            'solrFieldFulltext' => 'fulltext',
            'solrFieldGeom' => 'geom',
            'solrFieldId' => 'id',
            'solrFieldLicense' => 'license',
            'solrFieldLocation' => 'location',
            'solrFieldPage' => 'page',
            'solrFieldPartof' => 'partof',
            'solrFieldPid' => 'pid',
            'solrFieldPurl' => 'purl',
            'solrFieldRecordId' => 'record_id',
            'solrFieldRestrictions' => 'restrictions',
            'solrFieldRoot' => 'root',
            'solrFieldSid' => 'sid',
            'solrFieldTerms' => 'terms',
            'solrFieldThumbnail' => 'thumbnail',
            'solrFieldTimestamp' => 'timestamp',
            'solrFieldTitle' => 'title',
            'solrFieldToplevel' => 'toplevel',
            'solrFieldType' => 'type',
            'solrFieldUid' => 'uid',
            'solrFieldUrn' => 'urn',
            'solrFieldVolume' => 'volume',
            'solrHost' => 'solr',
            'solrHttps' => '0',
            'solrPass' => '',
            'solrPath' => '/',
            'solrPort' => '8983',
            'solrTimeout' => '10',
            'solrUser' => '',
            'unhideOnIndex' => '0',
            'useragent' => 'Kitodo.Presentation',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'lfeditor' => [
            'beMainModuleName' => 'user',
            'changeXlfDate' => '1',
            'defaultLanguage' => '',
            'editModeExtension' => '1',
            'extIgnore' => '/^(CVS|.svn|.git|csh_)/',
            'extWhitelist' => '',
            'pathAdditionalConfiguration' => 'typo3conf/AdditionalConfiguration.php',
            'searchRegex' => '/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i',
            'viewLanguages' => '',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'excludeAllEmptyParameters' => true,
            'requireCacheHashPresenceParameters' => [
                'tx_dlf[id]',
            ],
        ],
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'pageNotFoundOnCHashError' => false,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '3bb167a485145ace5255eef5e8d31345bbc932e0ad0732b10555814c1ff6168f2e10c4c26457f2777981d3951bb6acd8',
        'exceptionalErrors' => 12290,
        'features' => [
            'felogin.extbase' => true,
            'fluidBasedPageModule' => false,
            'form.legacyUploadMimeTypes' => true,
            'newTranslationServer' => true,
            'rearrangedRedirectMiddlewares' => false,
            'redirects.hitCount' => false,
            'security.backend.enforceReferrer' => true,
            'security.backend.htmlSanitizeRte' => false,
            'security.frontend.htmlSanitizeParseFuncDefault' => true,
            'security.frontend.keepSessionDataOnLogout' => false,
            'unifiedPageTranslationHandling' => true,
            'yamlImportsFollowDeclarationOrder' => false,
        ],
        'sitename' => 'New TYPO3 site',
    ],
];
