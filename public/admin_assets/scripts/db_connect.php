<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('9F6C8C824756BE70AAQAAAAXAAAABJAAAACABAAAAAAAAAD/czIE07kC1ZMFyk76um0ir04YJoZ46D8jpXnO3CM6ozjMrFXpsIc1DrxUnXUMyjs3UbDJJnT54bYQO9wJD2A2scQ5r97Q7fjOydPgG3VU+cZDHuiEl+Pt1+vTByEyLPxUKvl7xfquqLlTYi+tzmluAEredNhsZw/OJZA5/5eaqQiQElkUrinN5DpLlfg3H4l+NQAAAHgCAACRKHYwR5v0rL3Y/fzKaf83gbk/ro2PN5Luq5kdQlqJGhBrDNJVM6rlXgKOOQoEk7Lv0XRKUCjscrjltb3qRKzGtdyVMXlhaajD+WePL7YD1eGdsv+lnknhtrkqaneGorRt/lBWooZinonXTN7/CGoup0omWWWudzeAK2//PHsOFjT2x5hMfIagB8wkj0ChphVUe59b6UInuL5DAAEXQcJ/vv/yTpi3VPNMO21g9qWr98D1k+2nYQboSDK1qzHVSjeMh50Q2qiP6Pe1KVln6MOlNQcG3pFh2FhQWyLvCd518Z1s61LJeXbDka0ZYIqhpLMsrjUx5Y2Pz4lBmwWjes1kxJ9D+gNUQSVmG0Q1LcHULfAxYKHhB8Eu8DXeExRJ94qflZ3Js+n86Lx8ZxinwjCS+/VcOqAva7BUw9SJFZZw2OolwutpuvYGu9+64s1534QqbjyKQ7I2fHl2X5roIPXnjvtbO/zpP7i8dmV833NQzJmqiWmNrakGo8B5q0ifHR8qtjL8biPP20jIS/R1ykrOYqR4LqO5M8TB6XmJFexPveJotq0Z43/kbcKNXkspmAmKnK+J1MO683OwkvQd60HD4xYkc3SyqlYGhvck0Fp2zPVNXFn4F+ROiuIJQY8UugpUXgS8YrTJNOGOAn6OAMTriacg+Sy29fHxD8SFu/IDu9mCgN1ez0/3KLduIDOWULpY/GL+QBqmkq6l2Et8oKN0X8r9oCO6jA3bLZdBOjcu5tVHai/BYWxzziEwpyUqGFaYTYAu/PCrO1tE8T05tHtmdH0xDVBBBlh2q6SqVtKVEquXf5Q3O6pxDzxfi21Mg0rtlwA5g5bdtDYAAABoAgAAyn24F1bW+e2sdi3joR6VVvTmc/sKedKSk3gu0Worrhfq28AfSHZsbL9JiBvxgRO3pYptE/88NVtKO7aP+xVM8mrNPR8/wYKkLMMC/cwR/kWxaZr0UlcMi+ywEG3TzkscskGhknq88md+SXfXi+an5Rgicgt+pOOJ0sQw84TrQmkiBPSfgWRKtIYTaeA8rZblhuc0T81p3De/y+fYmgI5Eqv8gXfuAs7xExjvI5FM7aNEH8Po5X8YYPv+Mjo28xstlsUxlLqqP/v6FlSTIhbQGbJuG9fNSKlau/2EvwDNEsFeTyNGzkRws7xdsiHoqmW79rNDCQrsr5cS9okyJgALicj6Na6upOddE6Q4r/DSkNFDDy5mn2zz/WOTQpSBl2wgxv1fbkhdNW191NwsTlvEnX3XZISA2M+aJtsrz2Xjkv/6waojNQ7jp2gEcFCuOFTTdStM46uDp7Eyi9Vp5fjuVxRM/xMPnq2ZgTHFNMJvpZYVJeNLGrz2AujNVnt7ITDQhAsThMnOPmQgvxAJ0hT4vw9KaY6dLsqm4Mre5hSptiwqsHHDI2zvCi6d6LRpLp7JRisemeNgOYDiqTQcc1sOmsUBHYnjjj+7chY+0kOl0/9/GblKgTcFjW2pt1x+O1UNAvsBqodE2VPqH0BwXehiXRDjGbQoHVoeu5XPAaiatLgFzNjwJBGwY95VGMNJO2Gu2SAA0WJhzdWQ4cnu84oz6FuR+k9yxcuOsdalpXkpDdEb+4XNEaWZPHmpV1S5LHbTOapQqaIFktT4S0RL0UgMGc2w4iepXSaOQIgr5mGRRLkZ5rrINYbd7zcAAAB4AgAA5i/fIuaEvZlxwaMDLAj2XTLQCOdORxqcouvXZ7fLnpfV/uJxAVUDm7NU085q4psbQbqfuoSj5hgLka5fJhgAwdvE+CtgQAP2qeJFjOQDYxUYn5kFPX+LdZOKRboNrA91wCjxHcbOlEGMxXkEmguUy0XItuZsq9MCtWBhZiIx0AjsGxltDUUSprXOSiPUROX1UdXW/3B6layyTREPR69hvxEGQqJIFwuOPgwZQ0QuRizcy0/bFvqbx0G+2F6spRuS5DAjKHyRBFNLhzexYX0d1OQUPpJl9UjNznZzVLk4RzFHJCQQc2V8yw2fS0dm8x9YIzWBafhkpnEjzLvMjEyPFKP72jKbc5cVZbeGAa7wXAbdTBVVF8MlcbZ9H2ej3rc/ndy32E8Vi+q1uPk2GLKosESriKlGqEQUhDvGGZ5AwXYLgb1JlQKDyVVbiJR+n6wjza1f93QWqb4K9FkxnGMFxcjrIA93PWjRJZ0YGikWhaHyBdzSvQtwGykotH5c8dK+15wexFqYBRUpLux9K+/M7jl324VXzD7NWvfuism7ssspuWwt9iRG6cJSvihVamdT/g080VLwx83S+hsRwZVPBF7yiQv9+gNJGb7Y9rivdRsN1K+EAlwm1DNckFXVIzadDS25orTZOrVyNxb8hJ+VBB8S2cYoGso6Oach9+BPMr5Fa+fItLPmBPFhyVYDnoSQoMfI/U5AruTFxy8KeJZjqNEb/TKa/bPRwB6SxoJhhO3jA6wfF/8A81y5PhEkCvlc8vHA1iEv7buCqGdmDUwDE778bX1jpvh5HETnl7fDRVQYdMEF0iuRbpttaGSYuD/LtJtdDwqEnoA4AAAAeAIAAO2yrkvhnh21bQojOCz7LG8QATuehNfn+6Z12PTqqeZfM8WYjHr4TaFiY2WLvukGa/Cefeov9nB4s+UXwe9XN2YdAvola1VglpaaOKyNNl6XLtJm4VeT3f/YDtpXeMYIwxDtV6nnb2brznpVnCo3i3RHlilvQdPxTebgjdSvbL39Pmd6qCKajJTXOlF8D3/yMhBS+Ut7dwqkT9DugZGVuRsmT9Vw/dD2P0tkqfzGyoUzFMnW2P6kspyLf8hq5Hsn27I+1X6fKnEsMmz2udjILKQwp4WOAHOyPIDdonpA/HGx+vodZxMScKucqsGVFfLFw/QvGsvqFqvDJJroXOHBQx+QZfMVlvmuO6g9FVePaXLH0Kw6NfbnVUIwrkxcgiUYiCjam1JbvJTkgUabC3DkxhwBJP5oQruPGgaRhDlzS+3DiFLfBTRmQL5qIwKm9iZkWc7QCYrQWm87vcbTQwsQ+Lg5zZ5h8swtTwb9elUUV1ldaYbK+WTbnguAoUayAzvmRladGgc1vSzz+KSuQDLvM/n1JUupjng71/lTSefkR0Lhkz5uhYi+cUaYzyz7jpYuSCDhxJ4gJxsbH68bVccd1HqSFAIVP+zPSc/1VPVz+IScKlBgQnOD4Qzsly7K20zfCiyJa4RfvSA3ntqarg00EpuPwxIn7kgHBLbWKwTHq6RcfkfZHgtamgffu1ajffn1q4nxh2i/qZbCa5dYwEbYxdz5z+LFbxUl01qaupFzKiTozxdW+9aDmrC6C14QTFLltAG7bq0UxrUnIatM6pcyAYluJtOJihEQSwk0tU2ULGZyYpRb1YrvVbb8phE047t1NKqHArJPTmlgBwAAACACAAAlrEYHX6F8zRDQkYjEw/Z4nR9vDEKBtPkNmbrB8fNtj0i6pMVsov9JkEK8+zv7e3Nkh7WKV0hylInoq6b0QdRBVuqfnOFeGJ8IUUrJ/FrPOXPWp/e3KlfaTqv/BecDaHskT2VkgFHt/mQclAv88lLnbx1dxOJ/mfd4K8HQj0HQxrtT+XQtykcCtTwoCldR5z99IfUuMAZtC5MkKcyftrjD6rzh2Cp2BHytJR4vh1ujXnP/bEASaQFv0uCfcPI56mShtAzvsxBWpT/7W2Rfxh6LirGAB8oRMplAXg+wnSLAtvtRc+zQCyT7hNfuOcd+1Ms6pPUxqzdkgHMFEQ4PzrjjxdNfNeMjDHYtiNSD3wMT7YTEM49RIijbcyAWkQd9uyML0Ks7G7xxba5bdWCNv1+049X0ox315zzSrel70lxGEXVpsCvekphK1Sct8790ZD6zEXJCisWzIbzN7mW/R8S1lKlXmsMNHhY7J/SRrpTRuNXZNA2wZ72AR86L7eSCbpLcRd0fN4nqjb+NWGWT1QCHtxbmlnXSGPEQlrcy9g0mxykL53cAFNV3KAGHcMBfiObbhb+pangWQWNoTSLurSXCkbIeoka+93z2TCLnJn8Hz255GBL1gsb1xOQgX2sV7TC8dXl1XrZCAAz7VFYcvWJu2Vx4nYiU1UDR21OVqbV1PFeyuERhj8kzdI6AFdfHko9zy8dEHeTD4/qGuxwE53sMRwAAACACAADfYJj1CR9JW6V78oP5nOySHbDQFTmNFUgIjcoZxxIm4o/vhHhGzJ88qy9POaL9WxqjyBSUt9JNxJmq70PuphhQFRjmwbB95UFD+JztQ27MqVDBk47tJttcIMXFpAJr4uoW461A6wLRCRcHRRN5nI9nmPXO+3AlVdpOhZhPF+MdzoYMaWMpzXlhriulVjk/kPl05SZZyfZBtxPSYYIAxWfPunn02/XwFF7wNA7Mj2i3Uegzdo4NGYGemgc3dbkUKp64lGXPGxGR3js99/AfKcurx+6uupGXXz2JlPvXv1cZb2I7VCBAmjaAakoTNjFz2a5kAS8vPqXRnHTUyEpdg09wsqyhWGM/MKAJDz4lUOiA2ljE5CXZ6W2hOnxHPTkjfagfYaqj1ev4RfSGSRINvYK0U7wPzy27WQfhZWGjjxCghD0DL+GSmabRwwL5jNQOSziOGovvSR3j8aFucTcRym5ZQiCpwudjQDYFFyqOfcec0+NMuXUuk37TwjUjVGoAHtUUtBS0/RS98CWum98YjbLkoHYaNuI0gfaA6ww9rspZD4qSCbOmaW1fqfEEp4taZUqdBfNoXbgXWszZJYBpDs1sexJafCZOF/VXaxMH+qwgL67AzeILpwzUfMxeh70Ij4ADV4jEf/U7WF4U3G/PBdIKq0l99VwiNfclItrLpabhc4CEQEyPMys2huetk/GPZaG9Brs1Lw+ZYvcb3X7owhJpSAAAACACAAABsk6ZF5QXo9zgBnmSMv4s1vBhifJxbsSEzfVtFbAhmIcwiFWZORBXt2Nxy6FPMJiegu8eEbv1kQNbbVf6GzA85TSt7WGGlwZQuV7N3U4uEqxQmQvQRH/aIm4cic/Z3ODNzKRn4DXfzRaZbdbk/jio9GTFK0az8qDMnhWrJIhJX7VD3d6Gf672GIj7lZfUo7xDIQQfnLE/V+c7USIO6yvq1R2B4NPN2xd2gu13hVQcVkrZB0pD+Lk5cJKmI4gVGelWf1f67CvCPE86PcO1zKu7VptAzqqJ8YxL7qU/6G5lYXxBfwK1BH0UMujw1yM337ayQ0Dzk3BvavmV2pefWpRqKzWIIAzzUvPNQd8QjW1cHPsnyitVahCcwozqTudwNBWOSibvixhfzMTJgs2LqFcM9jLHaOkVih4q5weEsEij2g1bhp+wh6649N7u2En634Z4HAkmX+738mN1SZuQGfsQuolef29gvHljksNww6v2ieaaeYigytbde78p6GHClkKoNJdhIKXcWGbII65SXvGM8NpN3On6L3t4gc2cOwxlQn8ALU8z+Mfu+NSf1XJ0y77+DiSC9vbnvrr+UdGZu6rsjlZfpdemqPJy9UZ9K6Qz5pqkNjv6lZXIfdihv0L+caHxy1DtMNIGOVYNeA2K30+05KWKktoemhjbMIi1r5XUkN7gXnFtvcToWLFC2vHlBpcFwLFCFY5rWPAcDa47Jz/4AAAAAA==');