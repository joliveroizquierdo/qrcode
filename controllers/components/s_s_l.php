<?php
class SSLComponent extends Object{ 
        var $_aryParams         =       array();  
        var $reset                      =       true;  
        function initialize(&$controller){  
                $this->_config('objController',      $controller);  
                $this->_config('controller', $controller->params['controller']);  
                $this->_config('action',             $controller->params['action']);  
                $this->_config('host',               $_SERVER['SERVER_NAME']);  
                $this->_config('cakeUrl',            $controller->params['url']['url']);  
                $this->_config('forceSSL',           array());  
                if(strlen(trim($this->_getConfig('cakeUrl'))) > 0 && $this->_getConfig('cakeUrl') <> '/'){  


                        $this->_config('cakeUrl','/'.$this->_getConfig('cakeUrl'));  
                }  
                $this->_config('path',               $this->_getConfig('cakeUrl'));  
                $this->_config('redirectPath',       '://'.$this->_getConfig('host').$this->_getConfig('path'));  


        }  
        function shutdown(&$controller){  
                unset($this->_aryParams);  
        }  
        function _config($strParam,$objValue,$bolGet=false){  
                if(!$bolGet){  
                        $this->_aryParams[$strParam] = $objValue;  
                }else{  
                        return $this->_aryParams[$strParam];  
                }  
        }  
        function _getConfig($strParam){  
                return $this->_config($strParam,null,true);  
        }  
        function force($arySSL=null,$strAction=null){  
                if(is_array($arySSL)){  
                        foreach($arySSL as $strSSL){  
                                if(count(split('\.',$strSSL,2)) <> 2){  
                                        $strSSL .= '.*';  
                                }  
                                list($strController,$strAction) = split('\.',$strSSL,2);  
                                $this->_config('forceSSL',array_merge($this->_getConfig('forceSSL'),array(array('controller'=>  


$strController,'action'=>$strAction))));  
                        }  
                }elseif($arySSL <> null){  
                        if($strAction == null){  
                                $strAction = '*';  
                        }  
                        $this->_config('forceSSL',array_merge($this->_getConfig('forceSSL'),array(array('controller'=>$arySSL,'action'=>  


$strAction))));  
                }  
        }  
        function check(){  
                $this->_config('bolReset',$this->reset);  
                $bolForced = false;  
                foreach($this->_getConfig('forceSSL') as $arySSL){  
                        if($arySSL['controller'] == $this->_getConfig('controller') &&  
$arySSL['action'] == $this->_getConfig('action')){  
                                $bolForced = true;  
                        }elseif($arySSL['controller'] == $this->_getConfig('controller') &&  
$arySSL['action'] == '*'){  
                                $bolForced = true;  
                        }  
                }  
                $objController = $this->_getConfig('objController');  
                if(!env('HTTPS') && $bolForced){  
                        $objController->redirect('https'.$this->_getConfig('redirectPath'));  


                }elseif($this->_getConfig('bolReset')){  
                        if(!$bolForced && env('HTTPS')){  
                                $objController->redirect('http'.$this->_getConfig('redirectPath'));  


                        }  
                }  
        }  

} 
?>