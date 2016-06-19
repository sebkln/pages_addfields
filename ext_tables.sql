#
# Modifying pages table
#
CREATE TABLE pages (
    tx_pagesaddfields_customtext varchar(255) DEFAULT '' NOT NULL,
    tx_pagesaddfields_customcheckbox TINYINT(1) UNSIGNED DEFAULT '0' NOT NULL
);

#
# Modifying pages_language_overlay table
#
CREATE TABLE pages_language_overlay (
    tx_pagesaddfields_customtext varchar(255) DEFAULT '' NOT NULL
);