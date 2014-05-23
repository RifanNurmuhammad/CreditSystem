<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NeoClass {
	protected $ci;
	public function __construct()
  {
    $this->ci =& get_instance();
  }

	public function tableName($name)
	{
    $this->ci->config->load('config_neo');
		return $this->ci->config->item('tbl_prefix').$name;
	}

  public function loadView($view, $vars = array()) 
  {
    $this->ci->load->view('includes/header');
    $this->ci->load->view($view, $vars);
    $this->ci->load->view('includes/footer');
  }
  public function getEx($string, $count){
    $ex = explode(" ", $string);
    $return = array();
    if (count($ex)>$count) {
      for($i = 0; $i < $count; $i ++) {
        $return[] = $ex[$i];
      }
      return implode(" ", $return);
    } else {
      return $string;
    }
  }
  function chageImageURL($str, $replace){
    $ex = explode("/",$str);
    $image = str_replace(end($ex), $replace, $str);
    return $image;
  }

	function safeURL ($s){
    $s = strtolower($s);
    $s = preg_replace('/&.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/&#?[a-z0-9]+;/i','',$s);
    $s = preg_replace('/[^%A-Za-z0-9 _-]/', '-', $s);
    $s = trim($s, '-');
    return $s;
  }

  function getURL($url){
    if (is_array($url)) {
      $return = implode("/", $url);
    } else {
      $return = $url;
    }
    return base_url().$return.".html";
  }

	public function sendEmail($emailFormat=array())
	{
		$config['protocol']    	= 'smtp';
		$config['smtp_host']    = 'mail.vinnocrm.com';
		$config['smtp_port']    = 25;
		$config['smtp_timeout'] = 10;
		$config['smtp_user']    = 'freesmtp@vinnocrm.com';
		$config['smtp_pass']    = 'freesmtp';
		$config['charset']    	= 'utf-8';
		$config['newline']    	= "\r\n";
		$config['mailtype'] 	= 'html';
		$config['validation'] 	= TRUE;

		$this->ci->load->library('email');
		$this->ci->email->initialize($config);

		$this->ci->email->clear();
		$this->ci->email->from($emailFormat['sender_email'], $emailFormat['sender_name']);
		$this->ci->email->to($emailFormat['receiver_email']);
		$this->ci->email->subject($emailFormat['subject']);
		$this->ci->email->message($emailFormat['messages']);
		if (!empty($emailFormat['attach_file'])) {
			$this->ci->email->attach($emailFormat['attach_file']);	
		}

		if ($this->ci->email->send()) {
			return true;
		} else {
			return false;
		}
	}
}

class MetaData {

   /**
* This array of words might be stored in a database for ease of update-ability or being more accessible
*/         
   private $stopWords = array("a", "about", "above", "above", "across",
      "after", "afterwards", "again", "against", "all", "almost", "alone",
      "along", "already", "also", "although", "always", "am", "among",
      "amongst", "amoungst", "amount", "an", "and", "another", "any", "anyhow",
      "anyone", "anything", "anyway", "anywhere", "are", "around", "as", "at",
      "back", "be", "became", "because", "become", "becomes", "becoming",
      "been", "before", "beforehand", "behind", "being", "below", "beside",
      "besides", "between", "beyond", "bill", "both", "bottom", "but", "by",
      "call", "can", "cannot", "cant", "co", "com", "con", "could", "couldn't",
      "de", "detail", "do", "done", "down", "due", "during", "each",
      "eg", "eight", "either", "eleven", "else", "elsewhere", "empty", "enough",
      "etc", "even", "ever", "every", "everyone", "everything", "everywhere",
      "except", "few", "fifteen", "fify", "fill", "find", "first",
      "five", "for", "former", "formerly", "forty", "found", "four", "from",
      "front", "full", "further", "get", "give", "go", "had", "has", "hasnt",
      "have", "he", "hence", "her", "here", "hereafter", "hereby", "herein",
      "hereupon", "hers", "herself", "him", "himself", "his", "how", "however",
      "hundred", "i", "ie", "if", "in", "inc", "indeed", "interest", "into", "is",
      "it", "its", "itself", "keep", "last", "latter", "latterly", "least",
      "less", "ltd", "made", "many", "may", "me", "meanwhile", "might", "mill",
      "mine", "more", "moreover", "most", "mostly", "move", "much", "must",
      "my", "myself", "name", "namely", "neither", "never", "nevertheless",
      "next", "nine", "no", "nobody", "none", "noone", "nor", "not", "nothing",
      "now", "nowhere", "of", "off", "often", "on", "once", "one", "only",
      "onto", "or", "other", "others", "otherwise", "our", "ours", "ourselves",
      "out", "over", "own", "part", "per", "perhaps", "please", "put", "rather", "rd",
      "re", "same", "see", "seem", "seemed", "seeming", "seems", "serious",
      "several", "she", "should", "show", "side", "since", "sincere", "six",
      "sixty", "so", "some", "somehow", "someone", "something", "sometime",
      "sometimes", "somewhere", "still", "such", "take", "ten",
      "than", "that", "the", "their", "them", "themselves", "then", "thence",
      "there", "thereafter", "thereby", "therefore", "therein", "thereupon",
      "these", "they", "thin", "third", "this", "those", "though",
      "three", "through", "throughout", "thru", "thus", "to", "together", "too",
      "top", "toward", "towards", "twelve", "twenty", "two", "un", "under",
      "until", "up", "upon", "us", "very", "via", "was", "we", "well", "were",
      "what", "whatever", "when", "whence", "whenever", "where", "whereafter",
      "whereas", "whereby", "wherein", "whereupon", "wherever", "whether",
      "which", "while", "whither", "who", "whoever", "whole", "whom", "whose",
      "why", "will", "with", "within", "without", "would", "yet", "you", "your",
      "yours", "yourself", "yourselves", "ll", "t", "s", "d", "ve", "m",
        
         // special oddities
         "-", "--", "http", "www", "org"
   );

   /**
* Get a string of keywords
* @return string
* @param string $text
* @param int $nbrWords Number of words to return, default = 8
*/
        public function getMetaKeywords($text, $nbrWords = 8) {
                $text = strtolower(strip_tags($text));
                $keywords = $this->getKeywords($text, $nbrWords);
                return implode(", ", $keywords);
        } 

        public function getMetaDescription($text, $nbrWords = 8) {
                $text = strtolower(strip_tags($text));
                $keywords = $this->getKeywords($text, $nbrWords);
                return implode(" ", $keywords);
        }        
        
   /**
* Get array of keywords
* @return array
* @param string $text
* @param int $nbrWords Number of words to return, default = 8
*/
        public function getKeywords($text, $nbrWords = 8) {

                $text = preg_replace('/\'\w*\b/',' ',$text); // both contractions and possessives
                $words = str_word_count($text, 1);
                
                array_walk($words, array( $this, 'filter' ));                 
                $words = array_diff($words, $this->stopWords);
                $wordCount = array_count_values($words);
                
                arsort($wordCount);
                $wordCount = array_slice($wordCount, 0, $nbrWords);
                
                return array_keys($wordCount);
        }
   
        private function filter(&$val, $key) {
      $val = strtolower($val);
        }
   
        private function setStopWords() {
      $this->stopWords = array();
        }
        
}