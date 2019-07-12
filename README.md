# Additional fields for TYPO3 pages

How to extend pages with your own fields (including translated pages)

## Compatibility

This extension works in TYPO3 6.2, v7, v8 and v9.

### Adjustments for TYPO3 v9 (and newer)

Starting with **TYPO3 v9**, the database table _pages_language_overlay_ for translated pages is no longer in use.

Therefore the following files are no longer required:

* `Configuration/TCA/Overrides/pages_language_overlay.php`
* `ext_localconf.php`

The following part of `ext_tables.sql` should also be removed:

```SQL
#
# Modifying pages_language_overlay table
#
CREATE TABLE pages_language_overlay (
    tx_pagesaddfields_customtext varchar(255) DEFAULT '' NOT NULL
);
```

## Explanations

You can find the related tutorial here:
- english: [How to extend TYPO3 database tables with new fields](https://www.sebkln.de/en/tutorials/detail/how-to-extend-typo3-database-tables-with-new-fields/)
- german: [TYPO3-Datenbanktabellen um neue Felder erweitern](https://www.sebkln.de/tutorials/detail/typo3-datenbanktabellen-um-neue-felder-erweitern/)
