# Tailored CSV files for the Building Navigator of Behindertenverband Leipzig e.V.

Some PHP-scripts which build JSON files tailored to be used in the building-navigator of the Behindertenverband Leipzig e.V. File `source.csv` is the [enriched version](https://github.com/AKSW/transform-bvl-pages-to-csv-file) of the original building database. 

## Whats the purpose of this work?

The purpose of this repo is to provide transformation scripts to build a building-index as well as info files, one for each building of the original database. They contain original data serialized as JSON. The building navigator is being build using only HTML, JavaScript and CSS. We wanted to test, if its suitable to use JSON files instead of a full fledged database (RDBMS or triple store). Currently it seems that JSON is enough to fuel the application.

## License

Generated JSON files are licensed under the terms of [*Data licence Germany – attribution – version 2.0*](https://www.govdata.de/dl-de/by-2-0).

Software source code is licensed under the terms of [*GPL 3.0*](http://www.gnu.org/licenses/gpl-3.0.en.html).
