<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yiic message' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * NOTE, this file must be saved in UTF-8 encoding.
 *
 * @version $Id$
 */
return array (
  'Yii application can only be created once.' => '',
  'Alias "{alias}" is invalid. Make sure it points to an existing directory or file.' => '',
  'Path alias "{alias}" is redefined.' => '',
  'Path alias "{alias}" points to an invalid directory "{path}".' => '',
  'CApcCache requires PHP apc extension to be loaded.' => '',
  '{className} does not support flush() functionality.' => '',
  '{className} does not support get() functionality.' => '',
  '{className} does not support set() functionality.' => '',
  '{className} does not support add() functionality.' => '',
  '{className} does not support delete() functionality.' => '',
  'Cache table "{tableName}" does not exist.' => '',
  'CDbCache.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'CMemCache requires PHP memcache extension to be loaded.' => '',
  'CMemCache server configuration must have "host" value.' => '',
  'CMemCache server configuration must be an array.' => '',
  'CDbCacheDependency.sql cannot be empty.' => '',
  'CDbHttpSession.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'CDirectoryCacheDependency.directory cannot be empty.' => '',
  '"{path}" is not a valid directory.' => '',
  'CFileCacheDependency.fileName cannot be empty.' => '',
  'CGlobalStateCacheDependency.stateName cannot be empty.' => '',
  'Error: Table "{table}" does not have a primary key.' => '',
  'Error: Table "{table}" has a composite primary key which is not supported by crud command.' => '',
  'Object configuration must be an array containing a "class" element.' => '',
  'List index "{index}" is out of bound.' => '',
  'The list is read only.' => '',
  'Unable to find the list item.' => '',
  'List data must be an array or an object implementing Traversable.' => '',
  'The map is read only.' => '',
  'Map data must be an array or an object implementing Traversable.' => '',
  'Queue data must be an array or an object implementing Traversable.' => '',
  'The queue is empty.' => '',
  'Stack data must be an array or an object implementing Traversable.' => '',
  'The stack is empty.' => '',
  'CTypedList<{type}> can only hold objects of {type} class.' => '',
  'The command path "{path}" is not a valid directory.' => '',
  'Application base path "{path}" is not a valid directory.' => '',
  'Application runtime path "{path}" is not valid. Please make sure it is a directory writable by the Web server process.' => '',
  'Property "{class}.{property}" is not defined.' => '',
  'Property "{class}.{property}" is read only.' => '',
  'Event "{class}.{event}" is not defined.' => '',
  'Event "{class}.{event}" is attached with an invalid handler "{handler}".' => '',
  'Invalid enumerable value "{value}". Please make sure it is among ({enum}).' => '',
  '{class} has an invalid validation rule. The rule must specify attributes to be validated and the validator name.' => '',
  'CSecurityManager.validationKey cannot be empty.' => '',
  'CSecurityManager.encryptionKey cannot be empty.' => '',
  'CSecurityManager.validation must be either "MD5" or "SHA1".' => '',
  'CSecurityManager requires PHP mcrypt extension to be loaded in order to use data encryption feature.' => '',
  'Unable to create application state file "{file}". Make sure the directory containing the file exists and is writable by the Web server process.' => '',
  'CDbLogRoute requires database table "{table}" to store log messages.' => '',
  'CDbLogRoute.connectionID "{id}" does not point to a valid CDbConnection application component.' => '',
  'CFileLogRoute.logPath "{path}" does not point to a valid directory. Make sure the directory exists and is writable by the Web server process.' => '',
  'Log route configuration must have a "class" value.' => '',
  'CProfileLogRoute.report "{report}" is invalid. Valid values include "summary" and "callstack".' => '',
  'CProfileLogRoute found a mismatching code block "{token}". Make sure the calls to Yii::beginProfile() and Yii::endProfile() be properly nested.' => '',
  'CDbCommand failed to prepare the SQL statement: {error}' => '',
  'CDbCommand failed to execute the SQL statement: {error}' => '',
  'CDbConnection.connectionString cannot be empty.' => '',
  'CDbConnection failed to open the DB connection: {error}' => '',
  'CDbConnection is inactive and cannot perform any DB operations.' => '',
  'CDbConnection does not support reading schema for {driver} database.' => '',
  'CDbDataReader cannot rewind. It is a forward-only reader.' => '',
  'CDbTransaction is inactive and cannot perform commit or roll back operations.' => '',
  'Relation "{name}" is not defined in active record class "{class}".' => '',
  'Active record "{class}" is trying to select an invalid column "{column}". Note, the column must exist in the table or be an expression with alias.' => '',
  'The relation "{relation}" in active record class "{class}" is not specified correctly: the join table "{joinTable}" given in the foreign key cannot be found in the database.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key "{key}". The foreign key does not point to either joining table.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an incomplete foreign key. The foreign key must consist of columns referencing both joining tables.' => '',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The format of the foreign key must be "joinTable(fk1,fk2,...)".' => '',
  'Active Record requires a "db" CDbConnection application component.' => '',
  '{class} does not have attribute "{name}".' => '',
  'The active record cannot be inserted to database because it is not new.' => '',
  'The active record cannot be updated because it is new.' => '',
  'The active record cannot be deleted because it is new.' => '',
  'The table "{table}" for active record class "{class}" cannot be found in the database.' => '',
  'Active record "{class}" has an invalid configuration for relation "{relation}". It must specify the relation type, the related active record class and the foreign key.' => '',
  'No columns are being updated to table "{table}".' => '',
  'No counter columns are being updated for table "{table}".' => '',
  'The value for the primary key "{key}" is not supplied when querying the table "{table}".' => '',
  'Table "{table}" does not have a primary key defined.' => '',
  'Table "{table}" does not have a column named "{column}".' => '',
  'The pattern for month must be "M", "MM", "MMM", or "MMMM".' => '',
  'The pattern for day of the month must be "d" or "dd".' => '',
  'The pattern for day in year must be "D", "DD" or "DDD".' => '',
  'The pattern for day in month must be "F".' => '',
  'The pattern for day of the week must be "E", "EE", "EEE", "EEEE" or "EEEEE".' => '',
  'The pattern for AM/PM marker must be "a".' => '',
  'The pattern for 24 hour format must be "H" or "HH".' => '',
  'The pattern for 12 hour format must be "h" or "hh".' => '',
  'The pattern for hour in day must be "k" or "kk".' => '',
  'The pattern for hour in AM/PM must be "K" or "KK".' => '',
  'The pattern for minutes must be "m" or "mm".' => '',
  'The pattern for seconds must be "s" or "ss".' => '',
  'The pattern for week in year must be "w".' => '',
  'The pattern for week in month must be "W".' => '',
  'The pattern for time zone must be "z" or "v".' => '',
  'The pattern for era must be "G", "GG", "GGG", "GGGG" or "GGGGG".' => '',
  'CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.' => '',
  'Unrecognized locale "{locale}".' => '',
  'CCaptchaValidator.action "{id}" is invalid. Unable to find such an action in the current controller.' => '',
  'The verification code is incorrect.' => '',
  '{attribute} must be repeated exactly.' => '',
  '{attribute} is not a valid email address.' => '',
  'The "filter" property must be specified with a valid callback.' => '',
  '{attribute} must be an integer.' => '',
  '{attribute} must be a number.' => '',
  '{attribute} is too small (minimum is {min}).' => '',
  '{attribute} is too big (maximum is {max}).' => '',
  '{attribute} is not in the list.' => '',
  'The "pattern" property must be specified with a valid regular expression.' => '',
  '{attribute} is invalid.' => '',
  '{attribute} cannot be blank.' => '',
  '{attribute} is too short (minimum is {min} characters).' => '',
  '{attribute} is too long (maximum is {max} characters).' => '',
  '{attribute} is of the wrong length (should be {length} characters).' => '',
  '{attribute} must be {type}.' => '',
  '{attribute} "{value}" has already been taken.' => '',
  '{attribute} is not a valid URL.' => '',
  'CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.' => '',
  'The asset "{asset}" to be pulished does not exist.' => '',
  '{controller} contains improperly nested widget tags in its view "{view}". A {widget} widget does not have an endWidget() call.' => '',
  '{controller} has an extra endWidget({id}) call in its view.' => '',
  'CCacheHttpSession.cacheID is invalid. Please make sure "{id}" refers to a valid cache application component.' => '',
  'The system is unable to find the requested action "{action}".' => '',
  '{controller} cannot find the requested view "{view}".' => '',
  'Your request is not valid.' => '',
  'CHttpRequest is unable to determine the entry script URL.' => '',
  'CHttpCookieCollection can only hold CHttpCookie objects.' => '',
  'CHttpSession.savePath "{path}" is not a valid directory.' => '',
  'CHttpSession.cookieMode can only be "none", "allow" or "only".' => '',
  'CHttpSession.gcProbability "{value}" is invalid. It must be an integer between 0 and 100.' => '',
  'Theme directory "{directory}" does not exist.' => '',
  'CUrlManager.UrlFormat must be either "path" or "get".' => '',
  'The URL pattern "{pattern}" for route "{route}" is not a valid regular expression.' => '',
  'The requested controller "{controller}" does not exist.' => '',
  'The controller path "{path}" is not a valid directory.' => '',
  'The view path "{path}" is not a valid directory.' => '',
  'The system view path "{path}" is not a valid directory.' => '',
  'The layout path "{path}" is not a valid directory.' => '',
  'The requested view "{name}" is not found.' => '',
  'Cannot add an item of type "{child}" to an item of type "{parent}".' => '',
  'Cannot add "{child}" as a child of "{name}". A loop has been detected.' => '',
  'Either "{parent}" or "{child}" does not exist.' => '',
  'The item "{name}" does not exist.' => '',
  'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => '',
  'Cannot add "{child}" as a child of "{parent}". A loop has been detected.' => '',
  'The item "{parent}" already has a child "{child}".' => '',
  'Unknown authorization item "{name}".' => '',
  'Authorization item "{item}" has already been assigned to user "{user}".' => '',
  'Unable to add an item whose name is the same as an existing item.' => '',
  'Unable to change the item name. The name "{name}" is already used by another item.' => '',
  '{class}::authenticate() must be implemented.' => '',
  '{class}.allowAutoLogin must be set true in order to use cookie-based authentication.' => '',
  'Login Required' => '',
  'You are not authorized to perform this action.' => '',
  'The first element in a filter configuration must be the filter class.' => '',
  'CFilterChain can only take objects implementing the IFilter interface.' => '',
  'Filter "{filter}" is invalid. Controller "{class}" does have the filter method "filter{filter}".' => '',
  'Please fix the following input errors:' => '',
  'View file "{file}" does not exist.' => '',
  'Get a new code' => '',
  'The "view" property is required.' => '',
  'Unable to find the decorator view "{view}".' => '',
  'CFlexWidget.name cannot be empty.' => '',
  'CFlexWidget.baseUrl cannot be empty.' => '',
  'This content requires the <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.' => '',
  '{class} must specify "model" and "attribute" or "name" property values.' => '',
  'CMultiFileUpload.name is required.' => '',
  'Unable to replay the action "{object}.{method}". The method does not exist.' => '',
  '{widget} cannot find the view "{view}".' => '',
);
