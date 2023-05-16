<?php

namespace App\Services;

use App\Repositories\AuthorRepositoryInterface;

class AuthorService
{
      protected $authorRepository;

      public function __construct(AuthorRepositoryInterface $authorRepository)
      {
            $this->authorRepository = $authorRepository;
      }


      public function getAll()
      {
            return $this->authorRepository->getAll();
      }

      public function fetchArticlesFromNewsApi()
      {
          
            //----------------------  get the news api object--------------//
             $newsApi =  $this->sourceRepository->findByName('NewsApi.org');

             //-------------- send request to newsapi--------------//
             $client = new Client();
             $response = $client->get($newsApi->base_url.'v2/top-headlines?country=us&apiKey='.$newsApi->api_key);
             $content = $response->getBody()->getContents();
             $decodedContent = json_decode($content);
             return  $decodedContent;

             foreach($decodedContent->articles as $article)
             {
                 
                  //----------- prepare the response---------//
                  $data['author'] = $article->author;
                  $data['title'] = $article->title;
                  $data['description'] = $article->description;
                  $data['url'] = $article->url;

                  //---------------- store the response--------------//
                  $storeResponse['response_body'] = json_encode($data);
                  $storeResponse['source_id'] = $newsApi->id;
                  $this->updateOrCreate( $storeResponse);

                  $article = ArticleRepository::updateOrCreate(
                        ['title' => $articleData['title']],
                        [
                            'source_id' => 1, // replace with the actual source ID
                            'title' => $articleData['title'],
                            'description' => $articleData['description'],
                            'url' => $articleData['url'],
                            'image_url' => $articleData['urlToImage'],
                            'published_at' => $articleData['publishedAt'],
                        ]
                    );
                 
             }
            
      }

}
