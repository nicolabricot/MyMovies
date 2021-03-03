<?php

date_default_timezone_set('Europe/Paris');
error_reporting(0);

global $_CONFIG;
$_CONFIG['data'] = 'data';
$_CONFIG['database'] = $_CONFIG['data'].'/movies.php';
$_CONFIG['settings'] = $_CONFIG['data'].'/settings.php';
$_CONFIG['log'] = $_CONFIG['data'].'/area-51.txt';
$_CONFIG['images'] = 'images';
$_CONFIG['cache'] = 'cache';
$_CONFIG['title'] = 'Movies';
$_CONFIG['url_rewriting'] = FALSE;
$_CONFIG['countries'] = array('ad'=>'Andorra','ae'=>'United Arab Emirates','af'=>'Afghanistan','ag'=>'Antigua and Barbuda','ai'=>'Anguilla','al'=>'Albania','am'=>'Armenia','an'=>'Netherlands Antilles','ao'=>'Angola','ar'=>'Argentina','as'=>'American Samoa','at'=>'Austria','au'=>'Australia','aw'=>'Aruba','az'=>'Azerbaijan','ba'=>'Bosnia and Herzegovina','bb'=>'Barbados','bd'=>'Bangladesh','be'=>'Belgique','bf'=>'Burkina Faso','bg'=>'Bulgaria','bh'=>'Bahrain','bi'=>'Burundi','bj'=>'Benin','bm'=>'Bermuda','bn'=>'Brunei Darussalam','bo'=>'Bolivia, Plurinational State of','br'=>'Brazil','bs'=>'Bahamas','bt'=>'Bhutan','bv'=>'Bouvet Island','bw'=>'Botswana','by'=>'Belarus','bz'=>'Belize','ca'=>'Canada','cd'=>'Democratic Republic of the Congo','cf'=>'Central African Republic','cg'=>'Congo','ch'=>'Switzerland','ci'=>'Côte d’Ivoire','ck'=>'Cook Islands','cl'=>'Chile','cm'=>'Cameroon','cn'=>'China','co'=>'Colombia','cr'=>'Costa Rica','cu'=>'Cuba','cv'=>'Cape Verde','cw'=>'Curaçao','cy'=>'Cyprus','cz'=>'Czech Republic','de'=>'Germany','dj'=>'Djibouti','dk'=>'Denmark','dm'=>'Dominica','do'=>'Dominican Republic','dz'=>'Algeria','ec'=>'Ecuador','ee'=>'Estonia','eg'=>'Egypt','eh'=>'Western Sahara','er'=>'Eritrea','es'=>'Spain','et'=>'Ethiopia','fi'=>'Finland','fj'=>'Fiji','fk'=>'Falkland Islands (Malvinas)','fm'=>'Federated States of Micronesia','fo'=>'Faroe Islands','fr'=>'France','ga'=>'Gabon','gb'=>'United Kingdom','gd'=>'Grenada','ge'=>'Georgia','gf'=>'French Guiana','gg'=>'Guernsey','gh'=>'Ghana','gi'=>'Gibraltar','gl'=>'Greenland','gm'=>'Gambia','gn'=>'Guinea','gp'=>'Guadeloupe','gq'=>'Equatorial Guinea','gr'=>'Greece','gs'=>'South Georgia and the South Sandwich Islands','gt'=>'Guatemala','gu'=>'Guam','gw'=>'Guinea-Bissau','gy'=>'Guyana','hk'=>'Hong Kong','hm'=>'Heard Island and McDonald Islands','hn'=>'Honduras','hr'=>'Croatia','ht'=>'Haiti','hu'=>'Hungary','id'=>'Indonesia','ie'=>'Ireland','il'=>'Israel','im'=>'Isle of Man','in'=>'India','io'=>'British Indian Ocean Territory','iq'=>'Iraq','ir'=>'Islamic Republic of Iran','is'=>'Iceland','it'=>'Italy','je'=>'Jersey','jm'=>'Jamaica','jo'=>'Jordan','jp'=>'Japan','ke'=>'Kenya','kg'=>'Kyrgyzstan','kh'=>'Cambodia','ki'=>'Kiribati','km'=>'Comoros','kn'=>'Saint Kitts and Nevis','kp'=>'Democratic People’s Republic of Korea','kr'=>'Republic of Korea','kw'=>'Kuwait','ky'=>'Cayman Islands','kz'=>'Kazakhstan','la'=>'Lao People’s Democratic Republic','lb'=>'Lebanon','lc'=>'Saint Lucia','li'=>'Liechtenstein','lk'=>'Sri Lanka','lr'=>'Liberia','ls'=>'Lesotho','lt'=>'Lithuania','lu'=>'Luxembourg','lv'=>'Latvia','ly'=>'Libya','ma'=>'Morocco','mc'=>'Monaco','md'=>'Republic of Moldova','me'=>'Montenegro','mg'=>'Madagascar','mh'=>'Marshall Islands','mk'=>'The Former Yugoslav Republic of Macedonia','ml'=>'Mali','mm'=>'Myanmar','mn'=>'Mongolia','mo'=>'Macao','mp'=>'Northern Mariana Islands','mq'=>'Martinique','mr'=>'Mauritania','ms'=>'Montserrat','mt'=>'Malta','mu'=>'Mauritius','mv'=>'Maldives','mw'=>'Malawi','mx'=>'Mexico','my'=>'Malaysia','mz'=>'Mozambique','na'=>'Namibia','nc'=>'New Caledonia','ne'=>'Niger','nf'=>'Norfolk Island','ng'=>'Nigeria','ni'=>'Nicaragua','ni'=>'Nicaragua','nl'=>'Netherlands','no'=>'Norway','np'=>'Nepal','nr'=>'Nauru','nu'=>'Niue','nz'=>'New Zealand','om'=>'Oman','pa'=>'Panama','pe'=>'Peru','pf'=>'French Polynesia','pg'=>'Papua New Guinea','ph'=>'Philippines','pk'=>'Pakistan','pl'=>'Poland','om'=>'Saint Pierre and Miquelon','mn'=>'Pitcairn','pr'=>'Puerto Rico','ps'=>'State of Palestine','pt'=>'Portugal','pw'=>'Palau','py'=>'Paraguay','qa'=>'Qatar','re'=>'Réunion','ro'=>'Romania','rs'=>'Serbia','ru'=>'Russian Federation','rw'=>'Rwanda','sa'=>'Saudi Arabia','sb'=>'Solomon Islands','sc'=>'Seychelles','sd'=>'Sudan','se'=>'Sweden','sg'=>'Singapore','sh'=>'Saint Helena, Ascension and Tristan da Cunha','si'=>'Slovenia','sk'=>'Slovakia','sl'=>'Sierra Leone','sm'=>'San Marino','sn'=>'Senegal','so'=>'Somalia','sr'=>'Suriname','ss'=>'South Sudan','st'=>'Sao Tome and Principe','sv'=>'El Salvador','sx'=>'Sint Maarten (Dutch part)','sy'=>'Syrian Arab Republic','sz'=>'Swaziland','tc'=>'Turks and Caicos Islands','td'=>'Chad','tf'=>'French Southern Territories','tg'=>'Togo','th'=>'Thailand','tj'=>'Tajikistan','tk'=>'Tokelau','tl'=>'Timor-Leste','tm'=>'Turkmenistan','tn'=>'Tunisia','to'=>'Tonga','tr'=>'Turkey','tt'=>'Trinidad and Tobago','tv'=>'Tuvalu','tw'=>'Taiwan, Province of China','tz'=>'United Republic of Tanzania','ua'=>'Ukraine','ug'=>'Uganda','um'=>'United States Minor Outlying Islands','us'=>'United States','uy'=>'Uruguay','uz'=>'Uzbekistan','va'=>'Holy See (Vatican City State)','vc'=>'Saint Vincent and the Grenadines','ve'=>'Bolivarian Republic of Venezuela','vg'=>'Virgin Islands, British','vi'=>'Virgin Islands, U.S.','vn'=>'Viet Nam','vu'=>'Vanuatu','wf'=>'Wallis and Futuna','ws'=>'Samoa','ye'=>'Yemen','yt'=>'Mayotte','za'=>'South Africa','zm'=>'Zambia','zw'=>'Zimbabwe');
$_CONFIG['ban'] = $_CONFIG['data'].'/jail.php';
$_CONFIG['ban_after'] = 4;
$_CONFIG['ban_duration'] = 1800;
$_CONFIG['pagination'] = 10;
$_CONFIG['pagination_rss'] = 2*$_CONFIG['pagination'];
$_CONFIG['languages'] = array(
	'en' => array('en-US, en', 'English (en)'),
	'fr' => array('fr-FR, fr, en-US, en', 'French (fr), English (en)')
);
$_CONFIG['language'] = 'en';
$_CONFIG['robots'] = 'noindex,nofollow,noarchive';

define('PHPPREFIX','<?php /* ');
define('PHPSUFFIX',' */ ?>');
define('MOVIES', 'Movies');
define('MOVIES_VERSION', '1.5.0');
define('INACTIVITY_TIMEOUT', 3600);
define('RSS', 'movies.rss');
define('RSS_BOXOFFICE', 'box-office.rss');
define('RSS_WATCHLIST', 'watchlist.rss');

// Force cookie path (but do not change lifetime)
$cookie = session_get_cookie_params();
$cookiedir = ''; if(dirname($_SERVER['SCRIPT_NAME'])!='/') $cookiedir=dirname($_SERVER["SCRIPT_NAME"]).'/';
session_set_cookie_params($cookie['lifetime'], $cookiedir, $_SERVER['HTTP_HOST']);
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid', false);
session_name('Movies_'.md5($_SERVER['SCRIPT_NAME']));
if (session_id() == '') session_start();

// check right before create directories
if (!is_writable(realpath(dirname(__FILE__)))) die('<p style="text-align:center;"><span style="color:red;">ERROR</span><br />Application does not have the right to write in its own directory <code>'.realpath(dirname(__FILE__)).'</code>.</p>');
if (!is_dir($_CONFIG['data'])) { mkdir($_CONFIG['data'],0705); chmod($_CONFIG['data'],0705); }
if (!is_file($_CONFIG['data'].'/.htaccess')) { file_put_contents($_CONFIG['data'].'/.htaccess', 'deny from all'); }
if (!is_file($_CONFIG['data'].'/.htaccess')) die('<p style="text-align:center;"><span style="color:red;">*ERROR*</span><br />Application does not have the right to write in its own directory <code>'.realpath(dirname(__FILE__)).'</code>.</p>');
if (!is_dir($_CONFIG['cache'])) { mkdir($_CONFIG['cache'],0705); chmod($_CONFIG['cache'],0705); }
if (!is_file($_CONFIG['cache'].'/.htaccess')) { file_put_contents($_CONFIG['cache'].'/.htaccess', 'deny from all'); }
if (!is_dir($_CONFIG['images'])) { mkdir($_CONFIG['images'],0705); chmod($_CONFIG['images'],0705); }
if (!is_file($_CONFIG['images'].'/.htaccess')) { file_put_contents($_CONFIG['images'].'/.htaccess', 'options -indexes'); }
if (!is_file($_CONFIG['ban'])) { file_put_contents($_CONFIG['ban'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export(array('failures'=>array(),'banned'=>array()), TRUE).';'.PHP_EOL.'?>'); }

//ob_start();
$tpl = new RainTPL();

if (!is_file($_CONFIG['settings'])) { define('TITLE', $_CONFIG['title']); define('ROBOTS', $_CONFIG['robots']); define('AUTHOR', 'Nicolas Devenet'); install($tpl); }
require($_CONFIG['settings']);
define('TITLE', $_CONFIG['title']);
define('PAGINATION', $_CONFIG['pagination']);
define('ROBOTS', $_CONFIG['robots']);
define('AUTHOR', empty($_CONFIG['author']) ? $_CONFIG['login'] : $_CONFIG['author'] );
define('BASE_LANG', $_CONFIG['language']);
define('BASE_URL', (empty($_SERVER['REQUEST_SCHEME']) ? 'http' : $_SERVER['REQUEST_SCHEME']).'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');
define('CURRENT_URL_QUERY', htmlspecialchars(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY)));

/**
 * Rain class
 * @version 2.7.2
 */
class RainTPL {static $tpl_dir="templates/";static $cache_dir="cache/";static $base_url=null;static $tpl_ext="rain";static $path_replace=false;static $path_replace_list=array('a','img','link','script','input');static $black_list=array('\$this','raintpl::','self::','_SESSION','_SERVER','_ENV','eval','exec','unlink','rmdir');static $check_template_update=true;static $php_enabled=false;static $debug=false;public $var=array();protected $tpl=array(),$cache=false,$cache_id=null;protected static $config_name_sum=array();const CACHE_EXPIRE_TIME=3600;function assign($variable,$value=null){if(is_array($variable))$this->var+=$variable;else $this->var[$variable]=$value;}function draw($tpl_name,$return_string=false){try{$this->check_template($tpl_name);}catch(RainTpl_Exception $e){$output=$this->printDebug($e);die($output);}if(!$this->cache&&!$return_string){extract($this->var);include $this->tpl['compiled_filename'];unset($this->tpl);}else{ob_start();extract($this->var);include $this->tpl['compiled_filename'];$raintpl_contents=ob_get_clean();if($this->cache)file_put_contents($this->tpl['cache_filename'],"<?php if(!class_exists('raintpl')){exit;}?>".$raintpl_contents);unset($this->tpl);if($return_string)return $raintpl_contents;else echo $raintpl_contents;}}function cache($tpl_name,$expire_time=self::CACHE_EXPIRE_TIME,$cache_id=null){$this->cache_id=$cache_id;if(!$this->check_template($tpl_name)&&file_exists($this->tpl['cache_filename'])&&(time()-filemtime($this->tpl['cache_filename'])<$expire_time))return substr(file_get_contents($this->tpl['cache_filename']),43);else{if(file_exists($this->tpl['cache_filename']))unlink($this->tpl['cache_filename']);$this->cache=true;}}static function configure($setting,$value=null){if(is_array($setting))foreach($setting as $key=>$value)self::configure($key,$value);else if(property_exists(__CLASS__,$setting)){self::$$setting=$value;self::$config_name_sum[$setting]=$value;}}protected function check_template($tpl_name){if(!isset($this->tpl['checked'])){$tpl_basename=basename($tpl_name);$tpl_basedir=strpos($tpl_name,"/")?dirname($tpl_name).'/':null;$tpl_dir=self::$tpl_dir.$tpl_basedir;$this->tpl['tpl_filename']=$tpl_dir.$tpl_basename.'.'.self::$tpl_ext;$temp_compiled_filename=self::$cache_dir.$tpl_basename.".".md5($tpl_dir.serialize(self::$config_name_sum));$this->tpl['compiled_filename']=$temp_compiled_filename.'.rtpl.php';$this->tpl['cache_filename']=$temp_compiled_filename.'.s_'.$this->cache_id.'.rtpl.php';if(self::$check_template_update&&!file_exists($this->tpl['tpl_filename'])){$e=new RainTpl_NotFoundException('Template '.$tpl_basename.' not found!');throw $e->setTemplateFile($this->tpl['tpl_filename']);}if(!file_exists($this->tpl['compiled_filename'])||(self::$check_template_update&&filemtime($this->tpl['compiled_filename'])<filemtime($this->tpl['tpl_filename']))){$this->compileFile($tpl_basename,$tpl_basedir,$this->tpl['tpl_filename'],self::$cache_dir,$this->tpl['compiled_filename']);return true;}$this->tpl['checked']=true;}}protected function xml_reSubstitution($capture){return "<?php echo '<?xml ".stripslashes($capture[1])." ?>'; ?>";}protected function compileFile($tpl_basename,$tpl_basedir,$tpl_filename,$cache_dir,$compiled_filename){$this->tpl['source']=$template_code=file_get_contents($tpl_filename);$template_code=preg_replace("/<\?xml(.*?)\?>/s","##XML\\1XML##",$template_code);if(!self::$php_enabled)$template_code=str_replace(array("<?","?>"),array("&lt;?","?&gt;"),$template_code);$template_code=preg_replace_callback("/##XML(.*?)XML##/s",array($this,'xml_reSubstitution'),$template_code);$template_compiled="<?php if(!class_exists('raintpl')){exit;}?>".$this->compileTemplate($template_code,$tpl_basedir);$template_compiled=str_replace("?>\n","?>\n\n",$template_compiled);if(!is_dir($cache_dir))mkdir($cache_dir,0755,true);if(!is_writable($cache_dir))throw new RainTpl_Exception('Cache directory '.$cache_dir.'doesn\'t have write permission. Set write permission or set RAINTPL_CHECK_TEMPLATE_UPDATE to false. More details on http://www.raintpl.com/Documentation/Documentation-for-PHP-developers/Configuration/');file_put_contents($compiled_filename,$template_compiled);}protected function compileTemplate($template_code,$tpl_basedir){$tag_regexp=array('loop'=>'(\{loop(?: name){0,1}="\${0,1}[^"]*"\})','loop_close'=>'(\{\/loop\})','if'=>'(\{if(?: condition){0,1}="[^"]*"\})','elseif'=>'(\{elseif(?: condition){0,1}="[^"]*"\})','else'=>'(\{else\})','if_close'=>'(\{\/if\})','function'=>'(\{function="[^"]*"\})','noparse'=>'(\{noparse\})','noparse_close'=>'(\{\/noparse\})','ignore'=>'(\{ignore\}|\{\*)','ignore_close'=>'(\{\/ignore\}|\*\})','include'=>'(\{include="[^"]*"(?: cache="[^"]*")?\})','template_info'=>'(\{\$template_info\})','function'=>'(\{function="(\w*?)(?:.*?)"\})');$tag_regexp="/".join("|",$tag_regexp)."/";$template_code=preg_split($tag_regexp,$template_code,-1,PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY);$template_code=$this->path_replace($template_code,$tpl_basedir);$compiled_code=$this->compileCode($template_code);return $compiled_code;}protected function compileCode($parsed_code){$compiled_code=$open_if=$comment_is_open=$ignore_is_open=null;$loop_level=0;while($html=array_shift($parsed_code)){if(!$comment_is_open&&(strpos($html,'{/ignore}')!==FALSE||strpos($html,'*}')!==FALSE))$ignore_is_open=false;elseif($ignore_is_open){}elseif(strpos($html,'{/noparse}')!==FALSE)$comment_is_open=false;elseif($comment_is_open)$compiled_code.=$html;elseif(strpos($html,'{ignore}')!==FALSE||strpos($html,'{*')!==FALSE)$ignore_is_open=true;elseif(strpos($html,'{noparse}')!==FALSE)$comment_is_open=true;elseif(preg_match('/\{include="([^"]*)"(?: cache="([^"]*)"){0,1}\}/',$html,$code)){$include_var=$this->var_replace($code[1],$left_delimiter=null,$right_delimiter=null,$php_left_delimiter='".',$php_right_delimiter='."',$loop_level);if(isset($code[2])){$compiled_code.='<?php $tpl = new '.get_class($this).';'.'if( $cache = $tpl->cache( $template = basename("'.$include_var.'") ) )'.'	echo $cache;'.'else{'.'	$tpl_dir_temp = self::$tpl_dir;'.'	$tpl->assign( $this->var );'.(!$loop_level?null:'$tpl->assign( "key", $key'.$loop_level.' ); $tpl->assign( "value", $value'.$loop_level.' );').'	$tpl->draw( dirname("'.$include_var.'") . ( substr("'.$include_var.'",-1,1) != "/" ? "/" : "" ) . basename("'.$include_var.'") );'.'} ?>';}else{$compiled_code.='<?php $tpl = new '.get_class($this).';'.'$tpl_dir_temp = self::$tpl_dir;'.'$tpl->assign( $this->var );'.(!$loop_level?null:'$tpl->assign( "key", $key'.$loop_level.' ); $tpl->assign( "value", $value'.$loop_level.' );').'$tpl->draw( dirname("'.$include_var.'") . ( substr("'.$include_var.'",-1,1) != "/" ? "/" : "" ) . basename("'.$include_var.'") );'.'?>';}}elseif(preg_match('/\{loop(?: name){0,1}="\${0,1}([^"]*)"\}/',$html,$code)){$loop_level++;$var=$this->var_replace('$'.$code[1],$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level-1);$counter="\$counter$loop_level";$key="\$key$loop_level";$value="\$value$loop_level";$compiled_code.="<?php $counter=-1; if( isset($var) && is_array($var) && sizeof($var) ) foreach( $var as $key => $value ){ $counter++; ?>";}elseif(strpos($html,'{/loop}')!==FALSE){$counter="\$counter$loop_level";$loop_level--;$compiled_code.="<?php } ?>";}elseif(preg_match('/\{if(?: condition){0,1}="([^"]*)"\}/',$html,$code)){$open_if++;$tag=$code[0];$condition=$code[1];$this->function_check($tag);$parsed_condition=$this->var_replace($condition,$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php if( $parsed_condition ){ ?>";}elseif(preg_match('/\{elseif(?: condition){0,1}="([^"]*)"\}/',$html,$code)){$tag=$code[0];$condition=$code[1];$parsed_condition=$this->var_replace($condition,$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php }elseif( $parsed_condition ){ ?>";}elseif(strpos($html,'{else}')!==FALSE){$compiled_code.='<?php }else{ ?>';}elseif(strpos($html,'{/if}')!==FALSE){$open_if--;$compiled_code.='<?php } ?>';}elseif(preg_match('/\{function="(\w*)(.*?)"\}/',$html,$code)){$tag=$code[0];$function=$code[1];$this->function_check($tag);if(empty($code[2]))$parsed_function=$function."()";else $parsed_function=$function.$this->var_replace($code[2],$tag_left_delimiter=null,$tag_right_delimiter=null,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level);$compiled_code.="<?php echo $parsed_function; ?>";}elseif(strpos($html,'{$template_info}')!==FALSE){$tag='{$template_info}';$compiled_code.='<?php echo "<pre>"; print_r( $this->var ); echo "</pre>"; ?>';}else{$html=$this->var_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);$html=$this->const_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);$compiled_code.=$this->func_replace($html,$left_delimiter='\{',$right_delimiter='\}',$php_left_delimiter='<?php ',$php_right_delimiter=';?>',$loop_level,$echo=true);}}if($open_if>0){$e=new RainTpl_SyntaxException('Error! You need to close an {if} tag in '.$this->tpl['tpl_filename'].' template');throw $e->setTemplateFile($this->tpl['tpl_filename']);}return $compiled_code;}protected function reduce_path($path){$path=str_replace("://","@not_replace@",$path);$path=str_replace("//","/",$path);$path=str_replace("@not_replace@","://",$path);return preg_replace('/\w+\/\.\.\//','',$path);}protected function path_replace($html,$tpl_basedir){if(self::$path_replace){$tpl_dir=self::$base_url.self::$tpl_dir.$tpl_basedir;$path=$this->reduce_path($tpl_dir);$exp=$sub=array();if(in_array("img",self::$path_replace_list)){$exp=array('/<img(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<img(.*?)src=(?:")([^"]+?)#(?:")/i','/<img(.*?)src="(.*?)"/','/<img(.*?)src=(?:\@)([^"]+?)(?:\@)/i');$sub=array('<img$1src=@$2://$3@','<img$1src=@$2@','<img$1src="'.$path.'$2"','<img$1src="$2"');}if(in_array("script",self::$path_replace_list)){$exp=array_merge($exp,array('/<script(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<script(.*?)src=(?:")([^"]+?)#(?:")/i','/<script(.*?)src="(.*?)"/','/<script(.*?)src=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<script$1src=@$2://$3@','<script$1src=@$2@','<script$1src="'.$path.'$2"','<script$1src="$2"'));}if(in_array("link",self::$path_replace_list)){$exp=array_merge($exp,array('/<link(.*?)href=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<link(.*?)href=(?:")([^"]+?)#(?:")/i','/<link(.*?)href="(.*?)"/','/<link(.*?)href=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<link$1href=@$2://$3@','<link$1href=@$2@','<link$1href="'.$path.'$2"','<link$1href="$2"'));}if(in_array("a",self::$path_replace_list)){$exp=array_merge($exp,array('/<a(.*?)href=(?:")(http\:\/\/|https\:\/\/|javascript:)([^"]+?)(?:")/i','/<a(.*?)href="(.*?)"/','/<a(.*?)href=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<a$1href=@$2$3@','<a$1href="'.self::$base_url.'$2"','<a$1href="$2"'));}if(in_array("input",self::$path_replace_list)){$exp=array_merge($exp,array('/<input(.*?)src=(?:")(http|https)\:\/\/([^"]+?)(?:")/i','/<input(.*?)src=(?:")([^"]+?)#(?:")/i','/<input(.*?)src="(.*?)"/','/<input(.*?)src=(?:\@)([^"]+?)(?:\@)/i'));$sub=array_merge($sub,array('<input$1src=@$2://$3@','<input$1src=@$2@','<input$1src="'.$path.'$2"','<input$1src="$2"'));}return preg_replace($exp,$sub,$html);}else return $html;}function const_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){return preg_replace('/\{\#(\w+)\#{0,1}\}/',$php_left_delimiter.($echo?" echo ":null).'\\1'.$php_right_delimiter,$html);}function func_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){preg_match_all('/'.'\{\#{0,1}(\"{0,1}.*?\"{0,1})(\|\w.*?)\#{0,1}\}'.'/',$html,$matches);for($i=0,$n=count($matches[0]);$i<$n;$i++){$tag=$matches[0][$i];$var=$matches[1][$i];$extra_var=$matches[2][$i];$this->function_check($tag);$extra_var=$this->var_replace($extra_var,null,null,null,null,$loop_level);$is_init_variable=preg_match("/^(\s*?)\=[^=](.*?)$/",$extra_var);$function_var=($extra_var and $extra_var[0]=='|')?substr($extra_var,1):null;$temp=preg_split("/\.|\[|\-\>/",$var);$var_name=$temp[0];$variable_path=substr($var,strlen($var_name));$variable_path=str_replace('[','["',$variable_path);$variable_path=str_replace(']','"]',$variable_path);$variable_path=preg_replace('/\.\$(\w+)/','["$\\1"]',$variable_path);$variable_path=preg_replace('/\.(\w+)/','["\\1"]',$variable_path);if($function_var){$function_var=str_replace("::","@double_dot@",$function_var);if($dot_position=strpos($function_var,":")){$function=substr($function_var,0,$dot_position);$params=substr($function_var,$dot_position+1);}else{$function=str_replace("@double_dot@","::",$function_var);$params=null;}$function=str_replace("@double_dot@","::",$function);$params=str_replace("@double_dot@","::",$params);}else $function=$params=null;$php_var=$var_name.$variable_path;if(isset($function)){if($php_var)$php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $php_var, $params ) )":"$function( $php_var )").$php_right_delimiter;else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $params ) )":"$function()").$php_right_delimiter;}else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).$php_var.$extra_var.$php_right_delimiter;$html=str_replace($tag,$php_var,$html);}return $html;}function var_replace($html,$tag_left_delimiter,$tag_right_delimiter,$php_left_delimiter=null,$php_right_delimiter=null,$loop_level=null,$echo=null){if(preg_match_all('/'.$tag_left_delimiter.'\$(\w+(?:\.\${0,1}[A-Za-z0-9_]+)*(?:(?:\[\${0,1}[A-Za-z0-9_]+\])|(?:\-\>\${0,1}[A-Za-z0-9_]+))*)(.*?)'.$tag_right_delimiter.'/',$html,$matches)){for($parsed=array(),$i=0,$n=count($matches[0]);$i<$n;$i++)$parsed[$matches[0][$i]]=array('var'=>$matches[1][$i],'extra_var'=>$matches[2][$i]);foreach($parsed as $tag=>$array){$var=$array['var'];$extra_var=$array['extra_var'];$this->function_check($tag);$extra_var=$this->var_replace($extra_var,null,null,null,null,$loop_level);$is_init_variable=preg_match("/^[a-z_A-Z\.\[\](\-\>)]*=[^=]*$/",$extra_var);$function_var=($extra_var and $extra_var[0]=='|')?substr($extra_var,1):null;$temp=preg_split("/\.|\[|\-\>/",$var);$var_name=$temp[0];$variable_path=substr($var,strlen($var_name));$variable_path=str_replace('[','["',$variable_path);$variable_path=str_replace(']','"]',$variable_path);$variable_path=preg_replace('/\.(\${0,1}\w+)/','["\\1"]',$variable_path);if($is_init_variable)$extra_var="=\$this->var['{$var_name}']{$variable_path}".$extra_var;if($function_var){$function_var=str_replace("::","@double_dot@",$function_var);if($dot_position=strpos($function_var,":")){$function=substr($function_var,0,$dot_position);$params=substr($function_var,$dot_position+1);}else{$function=str_replace("@double_dot@","::",$function_var);$params=null;}$function=str_replace("@double_dot@","::",$function);$params=str_replace("@double_dot@","::",$params);}else $function=$params=null;if($loop_level){if($var_name=='key')$php_var='$key'.$loop_level;elseif($var_name=='value')$php_var='$value'.$loop_level.$variable_path;elseif($var_name=='counter')$php_var='$counter'.$loop_level;else $php_var='$'.$var_name.$variable_path;}else $php_var='$'.$var_name.$variable_path;if(isset($function))$php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).($params?"( $function( $php_var, $params ) )":"$function( $php_var )").$php_right_delimiter;else $php_var=$php_left_delimiter.(!$is_init_variable&&$echo?'echo ':null).$php_var.$extra_var.$php_right_delimiter;$html=str_replace($tag,$php_var,$html);}}return $html;}protected function function_check($code){$preg='#(\W|\s)'.implode('(\W|\s)|(\W|\s)',self::$black_list).'(\W|\s)#';if(count(self::$black_list)&&preg_match($preg,$code,$match)){$line=0;$rows=explode("\n",$this->tpl['source']);while(!strpos($rows[$line],$code))$line++;$e=new RainTpl_SyntaxException('Unallowed syntax in '.$this->tpl['tpl_filename'].' template');throw $e->setTemplateFile($this->tpl['tpl_filename'])->setTag($code)->setTemplateLine($line);}}protected function printDebug(RainTpl_Exception $e){if(!self::$debug){throw $e;}$output=sprintf('<h2>Exception: %s</h2><h3>%s</h3><p>template: %s</p>',get_class($e),$e->getMessage(),$e->getTemplateFile());if($e instanceof RainTpl_SyntaxException){if(null!=$e->getTemplateLine()){$output.='<p>line: '.$e->getTemplateLine().'</p>';}if(null!=$e->getTag()){$output.='<p>in tag: '.htmlspecialchars($e->getTag()).'</p>';}if(null!=$e->getTemplateLine()&&null!=$e->getTag()){$rows=explode("\n",htmlspecialchars($this->tpl['source']));$rows[$e->getTemplateLine()]='<font color=red>'.$rows[$e->getTemplateLine()].'</font>';$output.='<h3>template code</h3>'.implode('<br />',$rows).'</pre>';}}$output.=sprintf('<h3>trace</h3><p>In %s on line %d</p><pre>%s</pre>',$e->getFile(),$e->getLine(),nl2br(htmlspecialchars($e->getTraceAsString())));return $output;}}class RainTpl_Exception extends Exception{protected $templateFile='';public function getTemplateFile(){return $this->templateFile;}public function setTemplateFile($templateFile){$this->templateFile=(string) $templateFile;return $this;}}class RainTpl_NotFoundException extends RainTpl_Exception{}class RainTpl_SyntaxException extends RainTpl_Exception{protected $templateLine=null;protected $tag=null;public function getTemplateLine(){return $this->templateLine;}public function setTemplateLine($templateLine){$this->templateLine=(int) $templateLine;return $this;}public function getTag(){return $this->tag;}public function setTag($tag){$this->tag=(string) $tag;return $this;}}

/**
 * String class
 * Adapted from Laravel
 */
class StringHelper {
public static function slug($title, $separator = '-') { $title = static::ascii($title); $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', static::lower($title)); $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title); return trim($title, $separator); } public static function ascii($value) { $foreign = array('/æ|ǽ/' => 'ae', '/œ/' => 'oe', '/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|А/' => 'A', '/à|á|â|ã|ä|å|ǻ|ā|ă|ą|ǎ|ª|а/' => 'a', '/Б/' => 'B', '/б/' => 'b', '/Ç|Ć|Ĉ|Ċ|Č|Ц/' => 'C', '/ç|ć|ĉ|ċ|č|ц/' => 'c', '/Ð|Ď|Đ|Д/' => 'Dj', '/ð|ď|đ|д/' => 'dj', '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Е|Ё|Э/' => 'E', '/è|é|ê|ë|ē|ĕ|ė|ę|ě|е|ё|э/' => 'e', '/Ф/' => 'F', '/ƒ|ф/' => 'f', '/Ĝ|Ğ|Ġ|Ģ|Г/' => 'G', '/ĝ|ğ|ġ|ģ|г/' => 'g', '/Ĥ|Ħ|Х/' => 'H', '/ĥ|ħ|х/' => 'h', '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|И/' => 'I', '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|и/' => 'i', '/Ĵ|Й/' => 'J', '/ĵ|й/' => 'j', '/Ķ|К/' => 'K', '/ķ|к/' => 'k', '/Ĺ|Ļ|Ľ|Ŀ|Ł|Л/' => 'L', '/ĺ|ļ|ľ|ŀ|ł|л/' => 'l', '/М/' => 'M', '/м/' => 'm', '/Ñ|Ń|Ņ|Ň|Н/' => 'N', '/ñ|ń|ņ|ň|ŉ|н/' => 'n', '/Ö|Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|О/' => 'O', '/ö|ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|о/' => 'o', '/П/' => 'P', '/п/' => 'p', '/Ŕ|Ŗ|Ř|Р/' => 'R', '/ŕ|ŗ|ř|р/' => 'r', '/Ś|Ŝ|Ş|Ș|Š|С/' => 'S', '/ś|ŝ|ş|ș|š|ſ|с/' => 's', '/Ţ|Ț|Ť|Ŧ|Т/' => 'T', '/ţ|ț|ť|ŧ|т/' => 't', '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ü|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|У/' => 'U', '/ù|ú|û|ũ|ū|ŭ|ů|ü|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|у/' => 'u', '/В/' => 'V', '/в/' => 'v', '/Ý|Ÿ|Ŷ|Ы/' => 'Y', '/ý|ÿ|ŷ|ы/' => 'y', '/Ŵ/' => 'W', '/ŵ/' => 'w', '/Ź|Ż|Ž|З/' => 'Z', '/ź|ż|ž|з/' => 'z', '/Æ|Ǽ/' => 'AE', '/ß/'=> 'ss', '/Ĳ/' => 'IJ', '/ĳ/' => 'ij', '/Œ/' => 'OE', '/Ч/' => 'Ch', '/ч/' => 'ch', '/Ю/' => 'Ju', '/ю/' => 'ju', '/Я/' => 'Ja', '/я/' => 'ja', '/Ш/' => 'Sh', '/ш/' => 'sh', '/Щ/' => 'Shch', '/щ/' => 'shch', '/Ж/' => 'Zh', '/ж/' => 'zh' ); $value = preg_replace(array_keys($foreign),  array_values($foreign), $value); return preg_replace('/[^\x09\x0A\x0D\x20-\x7E]/', '', $value); } public static function lower($value) { return (function_exists('mb_get_info')) ? mb_strtolower($value, 'UTF-8') : strtolower($value); }
public static function pluralize($word, $quantity, $suffix = 's') { return $word.($quantity>1 ? $suffix : ''); }
}

/**
 * Movie class
 */
class Movie {
	const SEEN = TRUE;
	const NOT_SEEN = NULL;
}

/**
 * Database class
 */
class Movies implements Iterator, Countable, ArrayAccess {
	private $data;
	private $keys;
	private $current;
	private $logged;
	public $total_not_seen = 0;
	public $total_seen = 0;
	public $total_search = 0;
	public $total_genre = 0;

	function __construct($logged = FALSE) {
		$this->logged = $logged;
		$this->check();
		$this->read();
	}

	// Countable interface implementation
	public function count() { return count($this->data); }

	// ArrayAccess interface implementation
	public function offsetSet($offset, $value) {
		if (!$this->logged) die('You are not authorized to add a movie.');
		if (empty($value['id'])) die('Internal Error: A movie should always have a date id.');
		if (empty($offset)) die('You must specify a key.');
		$this->data[$offset] = $value;
	}
	public function offsetExists($offset) { return array_key_exists($offset,$this->data); }
	public function offsetUnset($offset) {
		if (!$this->logged) die('You are not authorized to delete a movie.');
		unset($this->data[$offset]);
	}
	public function offsetGet($offset) { return isset($this->data[$offset]) ? $this->data[$offset] : NULL; }

	// Iterator interface implementation
	function rewind() { $this->keys=array_keys($this->data); rsort($this->keys); $this->current=0; }
	function key() { return $this->keys[$this->current]; }
	function current() { return $this->data[$this->keys[$this->current]]; }
	function next() { ++$this->current; }
	function valid() { return isset($this->keys[$this->current]); }

	// Check if db directory and file exists
	private function check() {
		global $_CONFIG;
		if (!file_exists($_CONFIG['database']))  {
			$this->data = array();
			$movie = array('id' => time(),'title' => 'Moi, moche et méchant','original_title' => 'Despicable Me','release_date' => '2010-10-06','country' => 'us','genre' => 'Animation, Comedy, Crime, Family, Fantasy','duration' => 95,'synopsis' => 'In a happy suburban neighborhood surrounded by white picket fences with flowering rose bushes, sits a black house with a dead lawn. Unbeknownst to the neighbors, hidden beneath this home is a vast secret hideout. Surrounded by a small army of minions, we discover Gru, planning the biggest heist in the history of the world. He is going to steal the moon. (Yes, the moon!) Gru delights in all things wicked. Armed with his arsenal of shrink rays, freeze rays, and battle-ready vehicles for land and air, he vanquishes all who stand in his way. Until the day he encounters the immense will of three little orphaned girls who look at him and see something that no one else has ever seen: a potential Dad. The world\'s greatest villain has just met his greatest challenge: three little girls named Margo, Edith and Agnes.','link_image' => 'http://fr.web.img4.acsta.net/r_160_240/b_1_d6d6d6/medias/nmedia/18/73/23/03/19494202.jpg','link_website' => 'http://www.imdb.com/title/tt1323594/','status' => Movie::SEEN,'note' => 8, 'owned' => TRUE);
			$this->data[$movie['id']] = $movie;
			$movie = array('id' => time()+1,'title' => 'Moi, moche et méchant 2','original_title' => 'Despicable Me 2','release_date' => '2013-06-26','country' => 'us','genre' => 'Animation, Adventure, Comedy, Crime, Family, Sci-Fi','duration' => 98,'synopsis' => 'While Gru, the ex-supervillain is adjusting to family life and an attempted honest living in the jam business, a secret Arctic laboratory is stolen. The Anti-Villain League decides it needs an insider\'s help and recruits Gru in the investigation. Together with the eccentric AVL agent, Lucy Wilde, Gru concludes that his prime suspect is the presumed dead supervillain, El Macho, whose his teenage son is also making the moves on his eldest daughter, Margo. Seemingly blinded by his overprotectiveness of his children and his growing mutual attraction to Lucy, Gru seems on the wrong track even as his minions are being quietly kidnapped en masse for some malevolent purpose.','link_image' => 'http://fr.web.img2.acsta.net/r_160_240/b_1_d6d6d6/medias/nmedia/18/89/40/05/20532087.jpg','link_website' => 'http://www.imdb.com/title/tt1690953/','status' => Movie::NOT_SEEN,'note' => NULL, 'owned' => NULL);
			$this->data[$movie['id']] = $movie;
			file_put_contents($_CONFIG['database'], PHPPREFIX.base64_encode(gzdeflate(serialize($this->data))).PHPSUFFIX);
			self::RSS();
		}
	}

	// Read database from disk to memory
	private function read() {
		global $_CONFIG;
		$this->data=(file_exists($_CONFIG['database']) ? unserialize(gzinflate(base64_decode(substr(file_get_contents($_CONFIG['database']),strlen(PHPPREFIX),-strlen(PHPSUFFIX))))) : array() );
	}

	// Save database from memory to disk
	public function save() {
		global $_CONFIG;
		if (!$this->logged) die('You are not authorized to change the database.');
		krsort($this->data);
		file_put_contents($_CONFIG['database'], PHPPREFIX.base64_encode(gzdeflate(serialize($this->data))).PHPSUFFIX);
		self::RSS();
	}

	// return all movies inserted
	public function all() {
		krsort($this->data);
		return $this->data;
	}

	// random movie
	public function random() {
		return $this->data[array_rand($this->data)];
	}

	// last movies inserted
	public function lastMovies($begin = 0, $end = PAGINATION) {
		krsort($this->data);
		return array_slice($this->data, $begin, $end, TRUE);
	}

	// return sorted array by status (only not seen returned)
	public function byStatus($begin = 0, $end = PAGINATION) {
		$sorted = array();
		foreach ($this->data as $id => $movie) {
			if ($movie['status'] == Movie::NOT_SEEN) { $sorted[$id] = $movie; }
		}
		krsort($sorted);
		$this->total_not_seen = sizeof($sorted);
		return array_slice($sorted, $begin, $end, TRUE);
	}

	// return sorted array by note (and then id desc) (only seen i.e. with a note returned)
	public function byNote($begin = 0, $end = PAGINATION) {
		$sorted = array();
		foreach ($this->data as $id => $movie) {
			if ($movie['status'] == Movie::SEEN) { $sorted[$id] = $movie; }
		}
		$this->total_seen = sizeof($sorted);
		$values = array();
		foreach ($sorted as $key => $value) { $values[$key] = $value['note']; }
		$keys = array_keys($sorted);
		array_multisort($values, SORT_DESC, $keys, SORT_DESC, $sorted);
		return array_slice($sorted, $begin, $end, TRUE);
	}

	// function to get only movies with a genre given
	public function byGenre($genre, $begin = 0, $end = PAGINATION) {
		$result = array();
		$genre = mb_convert_case(htmlspecialchars($genre), MB_CASE_LOWER, "UTF-8");
		foreach($this->data as $m) {
			if (strpos(mb_convert_case($m['genre'], MB_CASE_LOWER, "UTF-8"), $genre)!==false)
				{ $result[$m['id']] = $m; }
		}
		krsort($result);
		$this->total_genre = sizeof($result);
		return array_slice($result, $begin, $end, TRUE);
	}

	// search function (case no sensitive). Currently: search exact whole expression
	public function search($term, $begin = 0, $end = PAGINATION) {
		$result = array();
		$s = mb_convert_case(htmlspecialchars($term), MB_CASE_LOWER, "UTF-8");
		foreach($this->data as $m) {
			$found =   (strpos(mb_convert_case($m['title'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
					|| (strpos(mb_convert_case($m['original_title'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
					|| (strpos(mb_convert_case($m['synopsis'], MB_CASE_LOWER, "UTF-8"),$s)!==false)
					|| (strpos(mb_convert_case($m['genre'], MB_CASE_LOWER, "UTF-8"),$s)!==false);
			if ($found) $result[$m['id']] = $m;
		}
		krsort($result);
		$this->total_search = sizeof($result);
		return array_slice($result, $begin, $end, TRUE);
	}

	// get next movie or NULL if not exists
	public function nextMovie($current_id) {
		if (array_key_exists($current_id, $this->data)) {
			while(key($this->data) !== $current_id) next($this->data);
			$result = next($this->data);
			reset($this->data);
			return $result;
		}
		return false;
	}
	// get previous movie or NULL if not exists
	public function previousMovie($current_id) {
		if (array_key_exists($current_id, $this->data)) {
			while(key($this->data) !== $current_id) next($this->data);
			$result = prev($this->data);
			reset($this->data);
			return $result;
		}
		return false;
	}

	// return the full URI to image linked to a given movie
	public static function CompleteImageURI($movie)
	{
		global $_CONFIG;
		$img = !empty($movie['link_image']) ? $movie['link_image'] : BASE_URL.'assets/img/movie.jpg';
		// if img is hosted in local, we have to add server URL before...
		if (substr( $img, 0, strlen($_CONFIG['images'].'/') ) === $_CONFIG['images'].'/') { $img = BASE_URL.$img; }

		return $img;
	}

	/*
	 * Write an RSS file with the movies $data given
	 * $data: movies to write
	 * $title: title of the RSS feed (ex.: Watchlist)
	 * $file: file name (ex.: movies-watchlist.rss)
	 */
	private function updateRSS($data, $title, $file) {
		global $_CONFIG;
		$xml  = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
		$xml .= '<rss version="2.0"  xmlns:atom="http://www.w3.org/2005/Atom">'.PHP_EOL;
		$xml .= '<channel>'.PHP_EOL;
		$xml .= '<atom:link href="'.BASE_URL.$file.'" rel="self" type="application/rss+xml" />'.PHP_EOL;
		$xml .= '<title>'.$title.'</title>'.PHP_EOL;
		$xml .= '<link>'.BASE_URL.'</link>'.PHP_EOL;
		$xml .= '<description>RSS feed of '.$title.'</description>'.PHP_EOL;
		$xml .= '<pubDate>'.date("D, d M Y H:i:s O").'</pubDate>'.PHP_EOL;
		$xml .= '<copyright>'.BASE_URL.'</copyright>'.PHP_EOL;
		$xml .= '<language>'.$_CONFIG['language'].'</language>'.PHP_EOL;
		$xml .= '<generator>'.MOVIES.'</generator>'.PHP_EOL;
		$xml .= '<image>'.PHP_EOL;
		$xml .= '<title>'.$title.'</title>'.PHP_EOL;
		$xml .= '<url>'.BASE_URL.'assets/img/movies_48x48.png</url>'.PHP_EOL;
		$xml .= '<link>'.BASE_URL.'</link>'.PHP_EOL;
		$xml .= '<width>48</width>'.PHP_EOL;
		$xml .= '<height>48</height>'.PHP_EOL;
		$xml .= '</image>'.PHP_EOL;
		foreach ($data as $id => $movie) {
			$xml .= '<item>'.PHP_EOL;
			$xml .= '<title>'. $movie['title'] .'</title>'.PHP_EOL;
			$xml .= '<link>'.BASE_URL.substr(Path::movie($movie['id']), 2).'</link>'.PHP_EOL;
			$xml .= '<description><![CDATA[<strong>'.($movie['status']==Movie::SEEN ? 'Movie seen &middot; Rated '.$movie['note'].'/10' : 'Movie not seen').'</strong><br />'.htmlspecialchars_decode(htmlentities($movie['synopsis'], ENT_COMPAT, 'UTF-8')).']]></description>'.PHP_EOL;
			$xml .= '<enclosure url="'.Movies::CompleteImageURI($movie).'" length="42" type="image/jpeg" />'.PHP_EOL;
			$xml .= '<guid isPermaLink="false">'.$movie['id'].'</guid>'.PHP_EOL;
			$xml .= '<pubDate>'.date("D, d M Y H:i:s O", $movie['id']).'</pubDate>'.PHP_EOL;
			foreach (explode(',', $movie['genre']) as $genre) {
				$xml .= '<category domain="'.BASE_URL.'?genre='.trim(mb_convert_case($genre, MB_CASE_LOWER, "UTF-8")).'">'.trim(mb_convert_case($genre, MB_CASE_TITLE, "UTF-8")).'</category>'.PHP_EOL;
			}
			$xml .= '<source url="'.BASE_URL.$file.'">'.TITLE.'</source>'.PHP_EOL;
			$xml .= '</item>'.PHP_EOL;
		}
		$xml .= '</channel>'.PHP_EOL;
		$xml .= '</rss>'.PHP_EOL;
		file_put_contents($file, $xml);
	}

	public function RSS() {
		global $_CONFIG;
		// normal feed: last movies
		self::updateRSS(self::lastMovies(0, $_CONFIG['pagination_rss']), TITLE, RSS);
		// box office feed
		self::updateRSS(self::byNote(0, $_CONFIG['pagination_rss']), TITLE.' &#183; Box office', RSS_BOXOFFICE);
		// watch list feed
		self::updateRSS(self::byStatus(0, $_CONFIG['pagination_rss']), TITLE.' &#183; Watchlist', RSS_WATCHLIST);
	}

	// export movies datas into json
	public function export($privateDatas = TRUE, $exportImages = FALSE, array $moviesIdToExport = NULL){
		$movies = new Movies();
		if($moviesIdToExport == NULL){
			$moviesIdToExport = array();
			foreach($movies as $movie){
				array_push($moviesIdToExport, $movie['id']);
			}
		}
		$moviesToExport = array();
		$imagesDatas = array();
		$i = 0;
		foreach($moviesIdToExport as $id){
		  if(isset($movies[$id])){
			$moviesToExport[$i] = $movies[$id];
			if(!$privateDatas){
			  $moviesToExport[$i]['status'] = NULL;
			  $moviesToExport[$i]['note'] = NULL;
			  $moviesToExport[$i]['owned'] = NULL;
			}
			if($exportImages){
			  if(empty($movies[$id]['link_image'])){
				$imagesDatas[$i] = NULL;
			  }
			  else{
				$type = pathinfo($movies[$id]['link_image'], PATHINFO_EXTENSION);
				$data = file_get_contents($movies[$id]['link_image']);
				$imagesDatas[$i] = 'data:image/'.$type.';base64,'.base64_encode($data);
			  }
			}
			$i++;
		  }
		}
		return json_encode(array('movies' => $moviesToExport, 'posters' => $imagesDatas));
	}

	// import movies datas from json
	public static function import($jsonDatas, $keep_ids = FALSE, $logged = FALSE){
		global $_CONFIG;

		if (!$logged) die('You are not authorized to import movies.');

		$datas = json_decode($jsonDatas, TRUE);
		if(!isset($datas['movies']) || !isset($datas['posters'])){
		  return FALSE;
		}
		$moviesDatas = $datas['movies'];
		$images = $datas['posters'];
		$id = time();
		$i = 0;
		$movies = new Movies($logged);
		foreach($moviesDatas as $movie){
		  $id = $keep_ids && isset($movie['id']) ? $movie['id'] : $id;
		  while(isset($movies[$id])){
			$id--;
		  }
		  $inputs = array(
			'id' => $id,
			'title' => (isset($movie['title']) ? trim(self::html_escaped($movie['title'])) : NULL),
			'synopsis' => (isset($movie['synopsis']) ? checkSynopsis(preg_replace('#<br( /)?>#', '', $movie['synopsis'])) : NULL),
			'genre' => (isset($movie['genre']) ? checkGenre($movie['genre']) : NULL),
			'status' => ((isset($movie['status']) && $movie['status'] != NULL) ? Movie::SEEN : NULL),
			'note' => (isset($movie['note']) ? checkRatingNote($movie['note'], ((isset($movie['status']) && $movie['status'] != NULL) ? Movie::SEEN : NULL)) : NULL),
			'owned' => ((isset($movie['owned']) && $movie['owned']) ? TRUE : NULL),
			'original_title' => (isset($movie['original_title']) ? trim(self::html_escaped($movie['original_title'])) : NULL),
			'duration' => (isset($movie['duration']) ? checkDuration($movie['duration']) : NULL),
			'release_date' => (isset($movie['release_date']) ? checkReleaseDate($movie['release_date']) : NULL),
			'country' => (isset($movie['country']) ? checkCountry($movie['country']) : NULL),
			'link_website' => (isset($movie['link_website']) ? checkLink($movie['link_website']) : NULL),
			'link_image' => NULL
		  );
		  if(empty($inputs['title']) && empty($inputs['synopsis'])) { continue; }
		  if(function_exists('imagecreatefromjpeg') && !empty($images[$i])) {
			$image = explode(',', $images[$i]);
			if(!isset($image[1])){ continue; }
			$imported = file_put_contents($_CONFIG['images'].'/'.$id.'.jpg', base64_decode($image[1]));
			if ($imported == false){ continue; }
			$inputs['link_image'] = $_CONFIG['images'].'/'.$id.'.jpg';
		  }
		  $movies[$id] = $inputs;
		  $i++;
		}
		$movies->save();
		return TRUE;
	}
	// Escapes < and > (inspired by Sebastien Sauvage with Shaarli)
	private static function html_escaped($html) {
    	return str_replace('>','&gt;',str_replace('<','&lt;',$html));
	}
}

/**
 * Get link to a page
 */
abstract class Path {
	private static function url($url, $name, $tpl = FALSE) {
		$result = '';
		if ($tpl) {
			$result .= '<li';
			if ($url == $tpl) {$result .= ' class="active"';}
			$result .= '>';
		}
		$result .= '<a ';
		if ($url=='box-office') { $result .= 'href="./?box-office"'; }
		elseif ($url=='soon') { $result .= 'href="./?watchlist"'; }
		elseif ($url=='home') { $result .= 'href="./"'; }
		return $result.'>'.$name."</a>".($tpl ? '</li>' : NULL);
	}
	private static function url_admin($url, $name, $tpl = FALSE) {
		$result = '';
		if ($tpl) {
			$result .= '<li';
			if ($url == $tpl) {$result .= ' class="active"';}
			$result .= '>';
		}
		$prefix = '/?';
		if ($url=='add') { $result .= '<a href="./?add"><i class="icon-plus"></i> '.$name.'</a>'; }
		elseif ($url=='admin') { $result .= '<a href="./?admin">'.$name.'</a>'; }
		return $result.($tpl ? '</li>' : NULL);
	}
	static function menu($active) {
		return self::url('home', 'All', $active)
					.self::url('box-office', 'Box office', $active)
					.self::url('soon', 'Watchlist', $active)
					.'<li class="rss'.($active=='rss'?' active':'').'"><a href="./?rss-feeds" class="tip" title="RSS&nbsp;feeds"><i class="icon-rss"></i></a></li>'
					.PHP_EOL;
	}
	static function menuAdmin($active) {
		return self::url_admin('add', 'Movie', $active)
					.self::url_admin('admin', 'Admin', $active)
					.PHP_EOL;
	}
	static function movie($id) {
		$movies = new Movies(isLogged());
		$title = isset($movies[$id]) ? '/'.StringHelper::slug($movies[$id]['title']) : '';
		return './?movie='.$id.$title;
	}
	static function page($id) {
		return 'page='.$id;
	}
	static function search() {
		return './?search';
	}
	static function admin() {
		return './?admin';
	}
	static function signin() {
		return './?signin';
	}
	static function signout() {
		return './?signout';
	}
	static function add() {
		return './?add';
	}
	static function edit($id) {
		return './?edit='.$id;
	}
	static function delete($id) {
		return './?delete='.$id;
	}
	static function logs() {
		return './?logs';
	}
	static function settings() {
		return './?settings';
	}
	static function export() {
		return './?export';
	}
	static function import() {
		return './?import';
	}
}


/**
 * Session managment (thanks to Sébastien Sauvage with Shaarli!)
 */
// Get state if user is logged in or not
function isLogged() {
	global $_CONFIG;
	if (!isset($_CONFIG['login'])) { return FALSE; }
	// If session does not exist on server side, or IP address has changed, or session has expired, logout.
	if (empty($_SESSION['uid']) || $_SESSION['ip'] != currentIP() || time() >= $_SESSION['expires_on']) {
		logout();
		return FALSE;
	}
	$_SESSION['expires_on'] = time() + INACTIVITY_TIMEOUT;
	return TRUE;
}

// Logout user
function logout() { if(isset($_SESSION)) { unset($_SESSION['uid']); unset($_SESSION['ip']); unset($_SESSION['expires_on']); } }

// Returns the IP address of the client (Used to prevent session cookie hijacking.)
function currentIP() {
	$ip = $_SERVER["REMOTE_ADDR"];
	// Then we use more HTTP headers to prevent session hijacking from users behind the same proxy
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip=$ip.'_'.$_SERVER['HTTP_X_FORWARDED_FOR']; }
	if (isset($_SERVER['HTTP_CLIENT_IP'])) { $ip=$ip.'_'.$_SERVER['HTTP_CLIENT_IP']; }
	return $ip;
}

// Check that user/password is correct.
function check_auth($login, $password) {
	global $_CONFIG;
	$hash = sha1($login.$password.$_CONFIG['salt']);
	if ($login == $_CONFIG['login'] && $hash == $_CONFIG['hash']) {
		$_SESSION['uid'] = sha1(uniqid('', TRUE).'_'.mt_rand());
		$_SESSION['ip'] = currentIP();
		$_SESSION['expires_on'] = time() + INACTIVITY_TIMEOUT;
		writeLog('Successful login for user '.htmlspecialchars($login));
		return TRUE;
	}
	writeLog('Failed login for user '.htmlspecialchars($login), TRUE);
	return FALSE;
}

// Token are attached to the session
if (!isset($_SESSION['tokens'])) $_SESSION['tokens']=array();

// Returns a token
function getToken() {
	$token = sha1(uniqid('',true).'_'.mt_rand());
	$_SESSION['tokens'][$token] = 1;
	return $token;
}

// Tells if a token is ok and destroy it in case of success
function acceptToken($token) {
	if (isset($_SESSION['tokens'][$token])) {
		unset($_SESSION['tokens'][$token]);
		return TRUE;
	}
	writeLog('Invalid security token given', TRUE);
	return FALSE;
}

// Several consecutive failed logins will ban the IP address for 1 hour.
include $_CONFIG['ban'];
// in case of failed login
function loginFailed() {
	global $_CONFIG;
	$ip = $_SERVER['REMOTE_ADDR'];
	$ban = $_CONFIG['ban_ip'];
	if (!isset($ban['failures'][$ip])) {$ban['failures'][$ip] = 0;}
	$ban['failures'][$ip]++;
	if ($ban['failures'][$ip] > ($_CONFIG['ban_after']-1)) {
		$ban['banned'][$ip] = time() + $_CONFIG['ban_duration'];
		writeLog('IP address banned from sign in', TRUE);
	}
	$_CONFIG['ban_ip'] = $ban;
	file_put_contents($_CONFIG['ban'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, TRUE).';'.PHP_EOL.'?>');
}

// Signals a successful login. Resets failed login counter.
function loginSucceeded() {
	global $_CONFIG;
	$ip = $_SERVER["REMOTE_ADDR"];
	$ban = $_CONFIG['ban_ip'];
	unset($ban['failures'][$ip]);
	unset($ban['banned'][$ip]);
	$_CONFIG['ban_ip'] = $ban;
	file_put_contents($_CONFIG['ban'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, TRUE).';'.PHP_EOL.'?>');
}

// Checks if the user CAN login. If 'true', the user can try to login.
function canLogin() {
	global $_CONFIG;
	$ip = $_SERVER["REMOTE_ADDR"];
	$ban = $_CONFIG['ban_ip'];
	if (isset($ban['banned'][$ip])) {
		// User is banned. Check if the ban has expired:
		if ($ban['banned'][$ip] <= time()) {
			writeLog('Ban lifted from jail');
			unset($ban['failures'][$ip]);
			unset($ban['banned'][$ip]);
			file_put_contents($_CONFIG['ban'], '<?php'.PHP_EOL.'$_CONFIG[\'ban_ip\']='.var_export($ban, TRUE).';'.PHP_EOL.'?>');
			return TRUE;
		}
		return FALSE;
	}
	return TRUE;
}

// list of url allowed to be redirected
function targetIsAllowed($target) {
	$allowed = array('admin', 'add', 'logs', 'settings', 'export', 'import');
	return in_array(htmlspecialchars($target), $allowed);
}

/**
 * Toolbox functions
 */
// save settings of users (ID, password, title)
function writeSettings() {
	global $_CONFIG;
	if (is_file($_CONFIG['settings']) && !isLogged()) die('You are not authorized to change config.');
	$file  = '<?php'.PHP_EOL;
	$file .= '$_CONFIG[\'login\']='.var_export($_CONFIG['login'], TRUE).'; ';
	$file .= '$_CONFIG[\'hash\']='.var_export($_CONFIG['hash'], TRUE).'; ';
	$file .= '$_CONFIG[\'salt\']='.var_export($_CONFIG['salt'], TRUE).'; ';
	$file .= '$_CONFIG[\'title\']='.var_export($_CONFIG['title'], TRUE).'; ';
	$file .= '$_CONFIG[\'author\']='.var_export($_CONFIG['author'], TRUE).'; ';
	$file .= '$_CONFIG[\'robots\']='.var_export($_CONFIG['robots'], TRUE).'; ';
	$file .= '$_CONFIG[\'language\']='.var_export($_CONFIG['language'], TRUE).'; ';
	$file .= '$_CONFIG[\'pagination\']='.var_export($_CONFIG['pagination'], TRUE).'; ';
	$file .= PHP_EOL.'?>';
	if (!file_put_contents($_CONFIG['settings'], $file)) die('Impossible to write the configuration file. Please verify the webapplication has rights to write.');
}

// log actions into file
function writeLog($message, $alert = FALSE) {
	global $_CONFIG;
	$log = strval(date('Y-m-d H:i:s')).' ['.$_SERVER["REMOTE_ADDR"].'] '.($alert ? '! ' : '  ').strval($message)."\n";
	file_put_contents($_CONFIG['log'], $log, FILE_APPEND);
}

// function message error page
function errorPage($message, $title) {
	global $tpl;
	$tpl->assign('page_title', 'Error');
	$tpl->assign('menu_links', Path::menu('error'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('error'));
	$tpl->assign('error_title', $title);
	$tpl->assign('error_content', $message.'<div class="espace-top">Please <a href="'.$_SERVER['REQUEST_URI'].'">try again</a>.</div>');
	$tpl->draw('error');
	exit();
}

// keep nl2br in synospis content
function checkSynopsis($html) {
	return nl2br(htmlspecialchars($html));
}

// check if a note give is correct
function checkRatingNote($note, $status) {
	if ($status != Movie::SEEN) { return NULL; }
	$note = (int) $note+0;
	if ($note >= 0 && $note <= 10)
		return $note;
	return 5;
}

// check if duration input is a positif integer
function checkDuration($duration) {
	$duration = (int) $duration+0;
	if ($duration > 0 && $duration <= 300)
		return $duration;
	return NULL;
}

// check if release date input is a date (but not if the date exists)
function checkReleaseDate($date) {
	if (empty($date)) { return NULL; }
	list($y, $m, $d) = explode('-', htmlspecialchars($date));
	$y = (int) $y+0; $m = (int) $m+0; $d = (int) $d+0;
	if (! $y > 0) { return NULL; }
	if (! ($m > 0 && $m <= 12)) { return NULL; }
	if (! ($d > 0 && $d <= 31)) { return NULL; }
	return implode('-', array($y, str_pad($m, 2, '0', STR_PAD_LEFT), str_pad($d, 2, '0', STR_PAD_LEFT)));
}

// check if country given is in list
function checkCountry($country) {
	if (empty($country) || $country == 'o') { return NULL; }
	global $_CONFIG;
	if (array_key_exists($country, $_CONFIG['countries'])) { return htmlspecialchars($country) ;}
	return NULL;
}

// check if input is a link, and if prefix was added or not
function checkLink($url) {
	global $_CONFIG;
	if (empty($url)) { return NULL; }
	// in case of local link to images folder
	if (substr( $url, 0, strlen($_CONFIG['images'].'/') ) === $_CONFIG['images'].'/') { return $url; }
	$scheme = parse_url(htmlspecialchars($url), PHP_URL_SCHEME);
	$url = preg_replace('#https?://#', '', htmlspecialchars($url));
	return (!empty($scheme) ? $scheme : 'http').'://'.$url;
}

function checkGenre($genre) {
	return trim(mb_convert_case(htmlspecialchars($genre), MB_CASE_TITLE, "UTF-8"));
}

function importImage($url, $id) {
	global $_CONFIG;

	if (!function_exists('imagecreatefromjpeg')) { return NULL; }

	$tmp = $_CONFIG['images'].'/temp.jpg';
	$output = $_CONFIG['images'].'/'.$id;
	$width = 160;
	$height = 213;

	$allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
	$allowed_mime = array('image/jpeg', 'image/png', 'image/gif');

	$infos = @getimagesize($url);
	if ($infos == FALSE) { throw new \Exception('The URL given is not an image or the file is not found.'); }

	$mime = $infos['mime'];
	$ext = pathinfo($url, PATHINFO_EXTENSION);

	if (!in_array($mime, $allowed_mime) || !in_array($ext, $allowed_ext)) { throw new \Exception('The MIME type or the extension of the image is not allowed.'); }

	$img = @file_get_contents($url);
	$imported = file_put_contents($tmp, $img);
	if ($imported == FALSE) { throw new \Exception('Unable to import image.'); }

	if ($ext == 'png') { $src = imagecreatefrompng($tmp); }
	else { $src = imagecreatefromjpeg($tmp); }
	unlink($tmp);

	$thumb = imagecreatetruecolor($width, $height);
	imagecopyresampled($thumb, $src, 0, 0, 0, 0, $width, $height, imagesx($src), imagesy($src));
	$result = imagejpeg($thumb, $output.'.jpg');
	if ($result == FALSE) {  throw new \Exception('Unable to resize image.'); }
}

// check if page number asked is correct else 404 or homepage
function checkPagination($page, $total) {
	$page = (int) $page+0;
	if ($page <= 0) { header('Location: ./'); exit(); }
	$pages = ceil($total/PAGINATION);
	if ($page <= $pages) { return TRUE; }
	notFound();
}

// return a string for robots meta tag
function parseRobots($index, $follow, $archive) {
	$result = array(
		($index ? 'index' : 'noindex'),
		($follow ? 'follow' : 'nofollow'),
		($archive ? 'archive' : 'noarchive')
	);
	return implode(',', $result);
}
// split the robots string used in meta tag
function getRobots($robots) {
	$robots = explode(',', $robots);
	$result = array (
		'index' => ($robots[0] == 'index'),
		'follow' => ($robots[1] == 'follow'),
		'archive' => ($robots[2] == 'archive')
	);
	return $result;
}

/**
 * Display functions
 */
// genre in <li></li>
function displayGenres($genres) {
	if (empty($genres)) { return NULL; }
	$genre = explode(",", $genres);
	ksort($genre);
	$result = '';
	foreach ($genre as $value)
		$result .= '<li><i class="icon-tag"></i> <a href="?genre='.trim(mb_convert_case($value, MB_CASE_LOWER, "UTF-8")).'">'.trim(mb_convert_case($value, MB_CASE_TITLE, "UTF-8")).'</a></li>';
	return $result.PHP_EOL;
}
// shortcut the synopsis (= summary) of the movie with [...]
function displaySynopsis($synopsis, $size = 400) {
	if (strlen($synopsis) > $size) {
		$begin = mb_strcut($synopsis, 0, $size, 'UTF-8');
		return trim($begin).'[…]';
	}
	return $synopsis;
}
// Convert note into stars
function displayNote($note) {
	$note = $note/2;
	$full_stars = floor($note);
	$half_star = (2*$note) % 2;
	$empty_stars = 5 - $note - $half_star;
	$result = '<div class="stars stars-'.ceil($note).' tip" data-title="Rated '.(2*$note).' out of 10">';
	for ($i=0; $i<$full_stars; $i++)
		$result .= '<i class="icon-star"></i>';
	if ($half_star == 1)
		$result .= '<i class="icon-star-half-empty"></i>';
	for ($i=0; $i<$empty_stars; $i++)
		$result .= '<i class="icon-star-empty"></i>';
	return $result.'</div>'.PHP_EOL;
}
// Convert note into HTML stars
function displaySimpleNote($note) {
	$note = $note/2;
	$full_stars = floor($note);
	$half_star = (2*$note) % 2;
	$result = '';
	for ($i=0; $i<$full_stars; $i++)
		$result .= '★';
	if ($half_star == 1)
		$result .= '½';
	return $result;
}
// remplace status by icon
function displayStatus($status) {
	$result = '<span class="tip" data-title="';
	if ($status == Movie::SEEN)
		 { $result .= 'Seen'; }
	else { $result .= 'Not&nbsp;seen'; }
	$result .= '"><i class="icon-';
	if ($status == Movie::SEEN)
		 { $result .= 'ok-sign'; }
	else { $result .= 'eye-close'; }
	return $result.'"></i></span>';
}
// remplace country name by a flag
function displayFlag($country) {
	global $_CONFIG;
	return '<span class="tip" data-title="'.$_CONFIG['countries'][$country].'"><span class="flag flag-'.$country.'" width="16" height="11"></span></span>';
}
// add flag with country name
function displayFlagWithName($country) {
	global $_CONFIG;
	return '<span class="tip" data-title="'.$_CONFIG['countries'][$country].'"><span class="flag flag-'.$country.'" width="16" height="11"></span></span> '.$_CONFIG['countries'][$country];
}
// display option of each contry (for form.movie.rain)
function displayCountryOptions($active = FALSE) {
	global $_CONFIG;
	asort($_CONFIG['countries']);
	$result = '<option value="o">None</option>';
	foreach($_CONFIG['countries'] as $code => $name) {
		$result .= '<option value="'.$code.'"';
		if ($code == $active) {$result .= ' selected="selected"';}
		$result .= '>'.$name.'</option>';
	}
	return $result;
}

// generate the <li></li> for pagination
function displayPagination($page, $total_entries, $prefix = '?') {
	$page = (int) $page+0;
	if ($page == 0) { $page = 1; };
	$pages = max(1, ceil($total_entries/PAGINATION));

	// display sweet pagination if there is only one page
	if ($pages === 1) { return '<li class="disabled"><a href="./'.str_replace('&amp;', '', $prefix).'">1</a></li>'; }

	$first_jump = $page > 4 && $pages > 4;
	$last_jump = $page <= ($pages-4) && $pages > 4;
	$min_page = intval(max($page - (4) / 2, 2));
	$max_page = intval(min($page + (4) / 2, $pages));

	$result = '';
	$result .= '<li'.($page==1 ? ' class="disabled"' : NULL).'><a href="./'.$prefix.Path::page(max(1, $page-1)).'" title="Previous" class="tip"><i class="icon-arrow-left"></i></a></li>';
	$result .= '<li'.($page==1 ? ' class="active"' : '').'><a href="./'.str_replace('&amp;', '', $prefix).'">1</a></li>';
	if ($first_jump && $pages != 5) { $result .= '<li class="disabled gap"><span>…</span></li>'; }
	else if ($first_jump) { $result .= '<li><a href="./'.$prefix.Path::page(2).'">2</a></li>'; }

	for ($i=$min_page; $i<=$max_page; $i++) {
		$result .= '<li'.($i==$page ? ' class="active"' : '').'><a href="./'.$prefix.Path::page($i).'">'.$i.'</a></li>';
	}

	if ($last_jump && $pages != 5) { $result .= '<li class="disabled gap"><span>…</span></li>'; }
	else if ($last_jump) { $result .= '<li><a href="./'.$prefix.Path::page(4).'">4</a></li>'; }
	if ($pages > 2 && $page <= $pages-3) { $result .= '<li'.($page==$pages ? ' class="active"' : '').'><a href="./'.$prefix.Path::page($pages).'">'.$pages.'</a></li>'; }
	$result .= '<li'.($page==$pages ? ' class="disabled"' : NULL).'><a href="./'.$prefix.Path::page(min($pages, $page+1)).'" title="Next" class="tip"><i class="icon-arrow-right"></i></a></li>';

	return $result;
}

// generate options for langage select
function displayLanguages($selected = NULL) {
	global $_CONFIG;
	$result = '';
	foreach ($_CONFIG['languages'] as $key => $lang) { $result .= '<option value="'.$key.'"'.($key==$selected ? ' selected="selected"' : NULL).'>'.$lang[1].'</option>'; }
	return $result;
}

/**
 * Script for pages begin here
 */

// installation: get user's ID
function install($tpl) {
	// get informations to save
	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		global $_CONFIG;
		$_CONFIG['login'] = htmlspecialchars($_POST['login']);
		$_CONFIG['salt'] = sha1(uniqid('',true).'_'.mt_rand());
		$_CONFIG['hash'] = sha1($_CONFIG['login'].$_POST['password'].$_CONFIG['salt']);
		$_CONFIG['title'] = empty($_POST['title']) ? 'Movies' : htmlspecialchars(trim($_POST['title']));
		$_CONFIG['author'] = empty($_POST['author']) ? $_CONFIG['login'] : htmlspecialchars(trim($_POST['author']));
		$_CONFIG['language'] = !empty($_POST['locale']) && array_key_exists($_POST['locale'], $_CONFIG['languages']) ? $_POST['locale'] : 'en';
		writeSettings();
		header('Location: '.$_SERVER['REQUEST_URI']);
		exit();
	}

	if (!function_exists('imagecreatefromjpeg')) { $tpl->assign('error_img', TRUE); }

	$tpl->assign('page_title', 'Installation');
	$tpl->assign('menu_links', NULL);
	$tpl->assign('locales', displayLanguages());
	$tpl->draw('form.install');
	exit();
}

// movie page
function moviePage() {
	$movies = new Movies();
	$id = (int) $_GET['movie']+0;
	if (! isset($movies[$id])) { notFound(); }
	$movie = $movies[$id];

	global $tpl;
	$tpl->assign('page_title', $movie['title']);
	$tpl->assign('menu_links', Path::menu('movie'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('movie'));
	$tpl->assign('movie', $movie);
	$tpl->assign('id', $movie['id']);
	$tpl->assign('displayStatus', displayStatus($movie['status']));
	$tpl->assign('displayNote', displayNote($movie['note']));
	$tpl->assign('country', $movie['country']);
	$tpl->assign('displayGenres', displayGenres($movie['genre']));
	$tpl->assign('token', getToken());
	$tpl->assign('movies_count', $movies->count());
	$tpl->assign('movie_next', $movies->nextMovie($movie['id']));
	$tpl->assign('movie_previous', $movies->previousMovie($movie['id']));
	$social_url = str_replace('./', BASE_URL, Path::movie($movie['id']));
	$tpl->assign('social', [
		'title' => $movie['title'],
		'description' => ($movie['status']==Movie::SEEN ? displaySimpleNote($movie['note']).' — ' : ''). str_replace('<br />', '', displaySynopsis($movie['synopsis'], 250)),
		'image' => Movies::CompleteImageURI($movie),
		'twitter' => urlencode(($movie['status']==Movie::SEEN ? 'I’ve rated '.($movie['note']/2).' '.StringHelper::pluralize('star', $movie['note']/2) : 'I want to see').' “'.$movie['title'].'” '.$social_url),
		'url' => $social_url
	]);
	$tpl->draw('movie');
	exit();
}

// redirection to a random movie
function randomMovie() {
	$movies = new Movies();
	$movie = $movies->random();
	header('Location: '.str_replace('./', BASE_URL, Path::movie($movie['id'])));
	exit();
}

// rss feeds page
function rssPage() {
	global $tpl;
	$tpl->assign('page_title', 'RSS feeds');
	$tpl->assign('menu_links', Path::menu('rss'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('rss'));
	$tpl->draw('rss');
	exit();
}

// administration pages
function administration() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=admin');
		exit();
	}
	global $tpl;

	// default page of administration
	$tpl->assign('page_title', 'Administration');
	$tpl->assign('menu_links', Path::menu('admin'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('admin'));
	$tpl->draw('admin');
	exit();
}

// display log file
function logsPage() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=logs');
		exit();
	}
	global $tpl;
	global $_CONFIG;

	if (!empty($_POST['purge-logs'])) {
		if (acceptToken($_POST['token'])) {
			file_put_contents($_CONFIG['log'], NULL); // in case of deleting file will not work
			unlink($_CONFIG['log']);
			header('Location: '.Path::logs());
			exit();
		}
		errorPage('The received token was empty or invalid.', 'Invalid security token');
	}

	if (!is_file($_CONFIG['log'])) {$logs = 'Nothing to say';}
	else {$logs = file_get_contents($_CONFIG['log']);}
	if (empty($logs)) {$logs = 'Nothing to say';}

	$tpl->assign('page_title', 'Logs');
	$tpl->assign('menu_links', Path::menu('logs'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('admin'));
	$tpl->assign('logs', $logs);
	$tpl->assign('filename', basename($_CONFIG['log']));
	$tpl->assign('token', getToken());
	$tpl->draw('admin.logs');
	exit();
}

// display log file
function settingsPage() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=settings');
		exit();
	}
	global $tpl;
	global $_CONFIG;

	if (!empty($_POST)) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			if (!empty($_POST['title'])) { $_CONFIG['title'] = htmlspecialchars($_POST['title']); }
			if (!empty($_POST['password'])) { $_CONFIG['hash'] = sha1($_CONFIG['login'].$_POST['password'].$_CONFIG['salt']); }
			if (!empty($_POST['locale'])) { $_CONFIG['language'] = array_key_exists($_POST['locale'], $_CONFIG['languages']) ? $_POST['locale'] : 'en'; }
			if (!empty($_POST['pagination'])) { $_CONFIG['pagination'] = max(2, $_POST['pagination']+0); }
			if (!empty($_POST['robots'])) { $_CONFIG['robots'] = parseRobots(in_array('index', $_POST['robots']), in_array('follow', $_POST['robots']), in_array('archive', $_POST['robots']) ); }
			else { $_CONFIG['robots'] = parseRobots(false, false, false); }
			$_CONFIG['author'] = empty($_POST['author']) ? $_CONFIG['login'] : htmlspecialchars(trim($_POST['author']));
			writeSettings();
			header('Location: '.Path::settings().'&update');
			exit();
		}
		errorPage('The received token was empty or invalid.', 'Invalid security token');
	}

	$tpl->assign('page_title', 'Settings');
	$tpl->assign('menu_links', Path::menu('settings'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('admin'));
	$tpl->assign('username', $_CONFIG['login']);
	$tpl->assign('locales', displayLanguages($_CONFIG['language']));
	$tpl->assign('robots', getRobots(ROBOTS));
	$tpl->assign('token', getToken());
	$tpl->draw('admin.settings');
	exit();
}

// display export form
function exportPage() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=export');
		exit();
	}
	global $tpl;
	global $_CONFIG;
	$movies = new Movies();

	if (!empty($_POST)) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			$private = !isset($_POST['private']);
			$images = isset($_POST['images']);
			$export = array();
			if (!empty($_POST['movie'])) { foreach ($_POST['movie'] as $key => $value) { $export[] = $key; } }
			header('Content-Type: application/force-download');
			header('Content-Disposition: attachment; filename="'.trim(mb_convert_case(TITLE, MB_CASE_LOWER, "UTF-8")).'_'.date('Y_m_d').'.json"');
			header('Content-type: application/json');
			exit($movies->export($private, $images, $export));
		}
		errorPage('The received token was empty or invalid.', 'Invalid security token');
	}

	$tpl->assign('page_title', 'Export movies');
	$tpl->assign('menu_links', Path::menu('export'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('admin'));
	$tpl->assign('movies', $movies->all());
	$tpl->assign('token', getToken());
	$tpl->draw('admin.export');
	exit();
}

// display import form
function importPage() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=import');
		exit();
	}
	global $tpl;

	if (isset($_GET['imported'])) { $tpl->assign('imported', TRUE); }
	else if (!empty($_FILES)) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			try {
				$ext_array = explode('.', $_FILES['file']['name']);
				$extension = end($ext_array);
				$mime = $_FILES['file']['type'];
				// check extension et mime type
				if ($extension != 'json') { throw new \Exception('<br />Extension of the file is not allowed! Please import a JSON file.'); }
				if (! ($mime == 'application/octet-stream' || $mime == 'application/json')) { throw new \Exception('<br />MIME type of the file is not allowed! Please import a JSON file.'); }

				$file = file_get_contents($_FILES['file']['tmp_name']);
				if (!$file) { throw new \Exception('An error occured while reading the file.'); }

				$result = Movies::import($file, isset($_POST['keep_ids']), isLogged());
				if (!$result) { throw new \Exception('An error occured while importing the file.'); }

				header('Location: '.Path::import().'&imported');
				exit();
			} catch(\Exception $e) {
					$tpl->assign('error', $e->getMessage());
				}
		} else {
			errorPage('The received token was empty or invalid.', 'Invalid security token');
		}
	}

	$tpl->assign('page_title', 'Import movies');
	$tpl->assign('menu_links', Path::menu('import'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('admin'));
	$tpl->assign('token', getToken());
	$tpl->draw('admin.import');
	exit();
}

// add a new movie
function addMovie() {
	if (!isLogged()) {
		header('Location: '.Path::signin().'&target=add');
		exit();
	}
	global $tpl;
	global $_CONFIG;

	// process to add movie in database
	if (isset($_POST) && !empty($_POST)) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			$inputs = array(
				'title' => (isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])) : NULL),
				'synopsis' => (isset($_POST['synopsis']) ? checkSynopsis($_POST['synopsis']) : NULL),
				'genre' => (isset($_POST['genre']) ? checkGenre($_POST['genre']) : NULL),
				'status' => (isset($_POST['status']) ? Movie::SEEN : NULL),
				'note' => (isset($_POST['note']) ? checkRatingNote($_POST['note'], (isset($_POST['status']) ? Movie::SEEN : NULL)) : NULL),
				'owned' => (isset($_POST['owned']) ? TRUE : NULL),
				'original_title' => (isset($_POST['original_title']) ? trim(htmlspecialchars($_POST['original_title'])) : NULL),
				'duration' => (isset($_POST['duration']) ? checkDuration($_POST['duration']) : NULL),
				'release_date' => (isset($_POST['release_date']) ? checkReleaseDate($_POST['release_date']) : NULL),
				'country' => (isset($_POST['country']) ? checkCountry($_POST['country']) : NULL),
				'link_website' => (isset($_POST['link_website']) ? checkLink($_POST['link_website']) : NULL),
				'link_image' => (isset($_POST['link_image']) ? checkLink($_POST['link_image']) : NULL),
				'link_image_import' => (isset($_POST['link_image_import']) ? TRUE : NULL)
			);
			$tpl->assign('inputs', $inputs);
			try {
				if (empty($inputs['title'])) { throw new \Exception('Title must not be empty.'); }
				if (empty($inputs['synopsis'])) { throw new \Exception('Synopsis must not be empty.'); }

				$movies = new Movies(isLogged());
				$id = time();
				while(isset($movies[$id])){
					$id--;
				}
				$movie = array( 'id' => $id );

				// check if we need to get the image given with url
				if ($inputs['link_image_import']) {
				importImage($inputs['link_image'], $movie['id']);
				$inputs['link_image'] = $_CONFIG['images'].'/'.$movie['id'].'.jpg';
				}
				unset($inputs['link_image_import']);

				foreach ($inputs as $key => $value) { $movie[$key] = $value; }
				$movies[$movie['id']] = $movie;
				$movies->save();

				header('Location: '.Path::movie($movie['id']));
				exit();
			} catch(\Exception $e) {
				$tpl->assign('error', $e->getMessage());
			}
		}
		else { errorPage('The received token was empty or invalid.', 'Invalid security token'); }
	}

	$tpl->assign('page_title', 'New movie');
	$tpl->assign('menu_links', Path::menu('add'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('add'));
	$tpl->assign('today', date('Y-m-d'));
	$tpl->assign('countries', displayCountryOptions(isset($inputs['country']) ? $inputs['country'] : NULL));
	$tpl->assign('token', getToken());
	$tpl->assign('target', Path::add());
	$tpl->assign('display_search', TRUE);
	$tpl->assign('target_search', Path::add());
	$tpl->draw('form.movie');
	exit();
}

// edit a movie
function editMovie() {
	if (!isLogged()) {
		header('Location: ./');
		exit();
	}

	$movies = new Movies(isLogged());
	$id = (int) $_GET['edit']+0;
	if (! isset($movies[$id])) { notFound(); }
	$movie = $movies[$id];
	global $tpl;
	global $_CONFIG;

	// process to edit movie in database
	if (isset($_POST) && !empty($_POST)) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			$inputs = array(
				'title' => (isset($_POST['title']) ? trim(htmlspecialchars($_POST['title'])) : NULL),
				'synopsis' => (isset($_POST['synopsis']) ? checkSynopsis($_POST['synopsis']) : NULL),
				'genre' => (isset($_POST['genre']) ? checkGenre($_POST['genre']) : NULL),
				'status' => (isset($_POST['status']) ? Movie::SEEN : NULL),
				'note' => (isset($_POST['note']) ? checkRatingNote($_POST['note'], (isset($_POST['status']) ? Movie::SEEN : NULL)) : NULL),
				'owned' => (isset($_POST['owned']) ? TRUE : NULL),
				'original_title' => (isset($_POST['original_title']) ? trim(htmlspecialchars($_POST['original_title'])) : NULL),
				'duration' => (isset($_POST['duration']) ? checkDuration($_POST['duration']) : NULL),
				'release_date' => (isset($_POST['release_date']) ? checkReleaseDate($_POST['release_date']) : NULL),
				'country' => (isset($_POST['country']) ? checkCountry($_POST['country']) : NULL),
				'link_website' => (isset($_POST['link_website']) ? checkLink($_POST['link_website']) : NULL),
				'link_image' => (isset($_POST['link_image']) ? checkLink($_POST['link_image']) : NULL),
				'link_image_import' => (isset($_POST['link_image_import']) ? TRUE : NULL)
			);
			try {
				if (empty($inputs['title'])) { throw new \Exception('Title must not be empty.'); }
				if (empty($inputs['synopsis'])) { throw new \Exception('Synopsis must not be empty.'); }
				$movie = array( 'id' => $id );

				// check if we need to get the image given with url
				if ($inputs['link_image_import']) {
					importImage($inputs['link_image'], $movie['id']);
					$inputs['link_image'] = $_CONFIG['images'].'/'.$id.'.jpg';
				}
				unset($inputs['link_image_import']);

				foreach ($inputs as $key => $value) { $movie[$key] = $value; }
				$movies[$id] = $movie;
				$movies->save();

				header('Location: '.Path::movie($id));
				exit();
			} catch(\Exception $e) {
				$tpl->assign('error', $e->getMessage());
			}
		}
		else { errorPage('The received token was empty or invalid.', 'Invalid security token'); }
	}
	else {
		$inputs = array(
			'title' => $movie['title'],
			'synopsis' => str_replace('<br />', '', $movie['synopsis']),
			'genre' => $movie['genre'],
			'status' => $movie['status'],
			'note' => $movie['note'],
			'owned' => $movie['owned'],
			'original_title' => $movie['original_title'],
			'duration' => $movie['duration'],
			'release_date' => $movie['release_date'],
			'country' => $movie['country'],
			'link_website' => preg_replace('#http://#', '', $movie['link_website']),
			'link_image' => preg_replace('#http://#', '', $movie['link_image'])
		);
	}

	$tpl->assign('page_title', 'Edit movie');
	$tpl->assign('menu_links', Path::menu('edit'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('edit'));
	$tpl->assign('inputs', $inputs);
	$tpl->assign('today', date('Y-m-d'));
	$tpl->assign('countries', displayCountryOptions($inputs['country']));
	$tpl->assign('token', getToken());
	$tpl->assign('target', Path::edit($id));
	$tpl->assign('delete', Path::delete($id));
	$tpl->draw('form.movie');
	exit();
}

// delete a movie
function deleteMovie() {
	if (!isLogged()) {
		header('Location: ./');
		exit();
	}

	$movies = new Movies(isLogged());
	$id = (int) $_GET['delete']+0;
	if (! isset($movies[$id])) { notFound(); }
	global $_CONFIG;

	// process to delete movie in database
	if (!empty($_GET['token']) && acceptToken($_GET['token'])) {
		// check if a miniature exists and delete it
		$img = $_CONFIG['images'].'/'.$id.'.jpg';
		if (is_file($img)) { unlink($img); }
		// delete movie in database
		unset($movies[$id]);
		$movies->save();
		header('Location: ./');
		exit();
	}
	else { errorPage('The received token was empty or invalid.', 'Invalid security token'); }
}

// signout controller
function signout() {
	logout();
	session_destroy();
	header('Location: ./');
	exit();
}

// login page (and process to log user)
function signin() {
	// user already logged in
	if (isLogged()) {
		header('Location: '.Path::admin());
		exit();
	}
	global $tpl;
	global $_CONFIG;

	if (!canLogin()) {
		global $tpl;
		$tpl->assign('page_title', 'Error');
		$tpl->assign('menu_links', Path::menu('error'));
		$tpl->assign('error_title', 'You’re in jail');
		$tpl->assign('error_content', 'You have been banned after too many bad attemps. <div class="espace-top">Please try later.</div>');
		$tpl->draw('error');
		exit();
	}

	if (!empty($_POST['login']) && !empty($_POST['password'])) {
		if (!empty($_POST['token']) && acceptToken($_POST['token'])) {
			if (check_auth(htmlspecialchars($_POST['login']), $_POST['password'])) {
				loginSucceeded();
				$cookiedir = ''; if(dirname($_SERVER['SCRIPT_NAME'])!='/') { $cookiedir=dirname($_SERVER["SCRIPT_NAME"]).'/'; }
				session_set_cookie_params(0, $cookiedir, $_SERVER['HTTP_HOST']);
				session_regenerate_id(TRUE);
				// check if we need to redirect the user
				$target = (isset($_GET['target']) && targetIsAllowed($_GET['target'])) ? Path::{$_GET['target']}() : './';
				header('Location: '.$target);
				exit();
			}
			loginFailed();
			errorPage('The given username or password was wrong. <br />If you do not remberer your login informations, just delete the file <code>'.basename($_CONFIG['settings']).'</code>.', 'Invalid username or password');
		}
		loginFailed();
		errorPage('The received token was empty or invalid.', 'Invalid security token');
	}

	$tpl->assign('page_title', 'Sign in');
	$tpl->assign('menu_links', Path::menu('signin'));
	$tpl->assign('target', (isset($_GET['target']) && targetIsAllowed($_GET['target'])) ? htmlspecialchars($_GET['target']) : NULL);
	$tpl->assign('token', getToken());
	$tpl->draw('form.signin');
	exit();
}

/**
 * Process to display (loading...)
 */
// movies not seen asked
if (isset($_GET['watchlist'])) {
	$movies = new Movies();
	$movies->byStatus(); // used to update $movies->total_no_seen

	$page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
	if($page == 0 || $page == 1) { header('Location: ./?watchlist'); }
	else if ($page == -1) { $page = 0; }
	// check if pagination is asked
	if (!empty($_GET['page'])) {
			checkPagination($page, $movies->total_not_seen);
			$tpl->assign('movie', $movies->byStatus(($page-1)*PAGINATION));
	} else { $tpl->assign('movie', $movies->byStatus()); }
	$tpl->assign('pagination', displayPagination($page, $movies->total_not_seen, '?watchlist&amp;'));
	$tpl->assign('page_title', !empty($page) ?  'Watchlist &middot; Page '.($page) : 'Watchlist');
	$tpl->assign('menu_links', Path::menu('soon'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('soon'));
	$tpl->assign('token', getToken());
	$tpl->draw('list');
	exit();
}
// movies sorted by note asked
if (isset($_GET['box-office'])) {
	$movies = new Movies();
	$movies->byNote(); // used to update $movies->total_seen

	$page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
	if($page == 0 || $page == 1) { header('Location: ./?box-office'); }
	else if ($page == -1) { $page = 0; }
	// check if pagination is asked
	if (!empty($_GET['page'])) {
			checkPagination($page, $movies->total_seen);
			$tpl->assign('movie', $movies->byNote(($page-1)*PAGINATION));
	} else { $tpl->assign('movie', $movies->byNote()); }
	$tpl->assign('pagination', displayPagination($page, $movies->total_seen, '?box-office&amp;'));
	$tpl->assign('page_title', !empty($page) ?  'Box office &middot; Page '.($page) : 'Box office');
	$tpl->assign('menu_links', Path::menu('box-office'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('box-office'));
	$tpl->assign('token', getToken());
	$tpl->draw('list');
	exit();
}
// movies sorted by search asked
if (isset($_GET['search'])) {
	if (empty($_GET['search'])) { notFound(); }
	$movies = new Movies();
	$movies->search(htmlspecialchars($_GET['search'])); // used to update $movies->total_search

	$page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
	if($page == 0 || $page == 1) { header('Location: ./?search='.htmlspecialchars($_GET['search'])); }
	else if ($page == -1) { $page = 0; }
	// check if pagination is asked
	if (!empty($_GET['page'])) {
			checkPagination($page, $movies->total_search);
			$tpl->assign('movie', $movies->search(htmlspecialchars($_GET['search']), ($page-1)*PAGINATION));
	} else { $tpl->assign('movie', $movies->search(htmlspecialchars($_GET['search']))); }
	$tpl->assign('pagination', displayPagination($page, $movies->total_search, '?search='.htmlspecialchars($_GET['search']).'&amp;'));
	$tpl->assign('page_title', !empty($page) ?  'Search &middot; Page '.($page) : 'Search');
	$tpl->assign('menu_links', Path::menu('search'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('search'));
	$tpl->assign('search', htmlspecialchars($_GET['search']));
	$tpl->assign('search_count', $movies->total_search);
	$tpl->assign('token', getToken());
	$tpl->draw('list');
	exit();
}
// movies sorted with a given genre asked
if (isset($_GET['genre'])) {
	if (empty($_GET['genre'])) { notFound(); }
	$movies = new Movies();
	$movies->byGenre(htmlspecialchars($_GET['genre'])); // used to update $movies->total_genre
	// if no result found, genre does not exist
	if ($movies->total_genre == 0) { notFound(); }

	$page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
	if($page == 0 || $page == 1) { header('Location: ./?genre='.htmlspecialchars($_GET['genre'])); }
	else if ($page == -1) { $page = 0; }
	// check if pagination is asked
	if (!empty($_GET['page'])) {
			checkPagination($page, $movies->total_genre);
			$tpl->assign('movie', $movies->byGenre(htmlspecialchars($_GET['genre']), ($page-1)*PAGINATION));
	} else { $tpl->assign('movie', $movies->byGenre(htmlspecialchars($_GET['genre']))); }
	$tpl->assign('pagination', displayPagination($page, $movies->total_genre, '?genre='.htmlspecialchars($_GET['genre']).'&amp;'));
	$tpl->assign('page_title', !empty($page) ? ucfirst(htmlspecialchars($_GET['genre'])).' &middot; Page '.($page) : ucfirst(htmlspecialchars($_GET['genre'])));
	$tpl->assign('menu_links', Path::menu('genre'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('genre'));
	$tpl->assign('token', getToken());
	$tpl->draw('list');
	exit();
}
// all movies asked [need to be after other page they need pagination!]
// HOME PAGE
if (empty($_GET) || isset($_GET['page'])) {
	$movies = new Movies();

	$page = isset($_GET['page']) ? (int) $_GET['page'] : -1;
	if($page == 0 || $page == 1) { header('Location: ./'); }
	else if ($page == -1) { $page = 0; }
	// check if pagination is asked
	if (!empty($_GET['page'])) {
			checkPagination($page, $movies->count());
			$tpl->assign('movie', $movies->lastMovies(($page-1)*PAGINATION));
	} else { $tpl->assign('movie', $movies->lastMovies()); }
	$tpl->assign('pagination', displayPagination($page, $movies->count()));
	$tpl->assign('page_title', !empty($page) ?  'Page '.($page) : '');
	$tpl->assign('menu_links', Path::menu('home'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('home'));
	$tpl->assign('token', getToken());
	$tpl->draw('list');
	exit();
}
// movie asked
if (!empty($_GET['movie'])) {moviePage();}
// rss feeds asked
if (isset($_GET['rss-feeds'])) {rssPage();}
// random movie 
if (isset($_GET['random'])) {randomMovie();}
// admin asked
if (isset($_GET['admin'])) {administration();}
// login asked
if (isset($_GET['signin'])) {signin();}
// logout asked
if (isset($_GET['signout'])) {signout();}
// new movie asked
if (isset($_GET['add'])) {addMovie();}
// edit movie asked
if (isset($_GET['edit']) && !empty($_GET['edit'])) {editMovie();}
// delete movie asked
if (isset($_GET['delete']) && !empty($_GET['delete'])) {deleteMovie();}
// display writted log asked
if (isset($_GET['logs'])) {logsPage();}
// display settings log asked
if (isset($_GET['settings'])) {settingsPage();}
// display export page asked
if (isset($_GET['export'])) {exportPage();}
// display import page asked
if (isset($_GET['import'])) {importPage();}


// nothing to do: 404 error
function notFound() {
	global $tpl;
	header('HTTP/1.1 404 Not Found', true, 404);
	$tpl->assign('page_title', 'Error 404');
	$tpl->assign('menu_links', Path::menu('error'));
	$tpl->assign('menu_links_admin', Path::menuAdmin('error'));
	$tpl->draw('404');
	exit();
}
notFound();

?>
