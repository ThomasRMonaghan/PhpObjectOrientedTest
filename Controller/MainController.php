<?php

// a Json object reconsturcure plugin

class MainController ()
{
    public JSON $incomingJsonObject = [{"isbn": "123-456-222",  
        "author": 
           {
             "lastname": "Doe",
             "firstname": "Jane"
           },
       "editor": 
           {
             "lastname": "Smith",
             "firstname": "Jane"
           },
         "title": "The Ultimate Database Study Guide",  
         "category": ["Non-Fiction", "Technology"]
        }];

    public JSON $outgoingJsonObject;

    public function index(JSON $incomingJsonObject, string $operation, array $params): JSON
    {
        // sanatize Json

        switch ($operation)
        {
            // go through each key, restructure keys via [A-Z 0-9]
            case "Alphabetical Forward":
                return $this->alphabeticalService->forward($incomingJsonObject);
                break;
            // go through each key, restructure keys via [9-0 Z-A]
            case "Alphabetical Reverse":
                return $this->alphabeticalService->reverse($incomingJsonObject);
                break;
            // go through each key, return each key value pair which matches specific param 
            case "Search Iterative":
                return $this->searchJsonService->iterative($incomingJsonObject, $params);
                break;
            // go through each key, return first key value pair which matches specific param
            case "Get First":
                return $this->searchJsonService->first($incomingJsonObject, $params)
                break;
            // go through each key, return last key value pair which matches specific param 
            case "Get Last":
                return $this->searchJsonService->last($incomingJsonObject, $params)
                break;
            default:
            // throw exception
        }
    }
}