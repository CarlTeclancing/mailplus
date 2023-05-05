<?php

if(!function_exists('redirect'))
{

    /**
     * @param string $url - This is the redirection url
     * @param array $query - Incase the redirection needs a query
     * @return mixed The redirection link
     */ 
    function redirect(string $url, array $query = [])
    {
        if(!empty($query)){
            $newQuery = http_build_query($query);

            return header('Location: '. $url . '?' . $newQuery);
        }

        return header('Location: '. $url);
    }
}