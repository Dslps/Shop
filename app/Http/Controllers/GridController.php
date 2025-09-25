<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function index()
    {
        $gridColumns = $this->generateInitialColumns();
        return view('welcome', compact('gridColumns'));
    }
    
    public function loadColumns(Request $request)
    {
        $regionX = $request->input('regionX', 0);
        $regionY = $request->input('regionY', 0);
        
        $columns = $this->generateColumnsForRegion($regionX, $regionY);
        
        return response()->json(['columns' => $columns]);
    }
    
    private function generateInitialColumns()
    {
        $columns = [];
        
        // Генерируем 5 начальных колонок
        for ($i = 0; $i < 5; $i++) {
            $columns[] = [
                'index' => $i,
                'cards' => $this->generateCardsForColumn($i)
            ];
        }
        
        return $columns;
    }
    
    private function generateColumnsForRegion($regionX, $regionY)
    {
        $columns = [];
        
        // Генерируем 5 колонок для региона
        for ($i = 0; $i < 5; $i++) {
            $columnIndex = $regionX * 5 + $i + ($regionY * 100); // Уникальный индекс
            
            $columns[] = [
                'index' => $columnIndex,
                'cards' => $this->generateCardsForColumn($columnIndex)
            ];
        }
        
        return $columns;
    }
    
    private function generateCardsForColumn($columnIndex)
    {
        $cards = [];
        
        // 3 карточки в каждой колонке
        for ($i = 0; $i < 3; $i++) {
            $cards[] = $this->createCardData($columnIndex, $i);
        }
        
        return $cards;
    }
    
    private function createCardData($columnIndex, $cardIndex)
    {
        $properties = [
            [
                'title' => 'Cedar Ridge Estates',
                'description' => 'Luxurious family home with modern amenities and beautiful garden',
                'features' => ['4 bed', '3 bath', '2,400 sqft'],
                'price' => '$750,000'
            ],
            [
                'title' => 'Sunrise Towers',
                'description' => 'Contemporary downtown living with city views',
                'features' => ['2 bed', '2 bath', '1,200 sqft'],
                'price' => '$890,000'
            ],
            [
                'title' => 'Oakwood Homes',
                'description' => 'Family-friendly neighborhood with great schools',
                'features' => ['3 bed', '2 bath', '1,800 sqft'],
                'price' => '$650,000'
            ],
            [
                'title' => 'Modern Loft',
                'description' => 'Stylish urban living space in the heart of downtown',
                'features' => ['1 bed', '1 bath', '900 sqft'],
                'price' => '$520,000'
            ],
            [
                'title' => 'Suburban Villa',
                'description' => 'Spacious home with pool and large backyard',
                'features' => ['5 bed', '4 bath', '3,200 sqft'],
                'price' => '$1,200,000'
            ]
        ];
        
        $propertyIndex = ($columnIndex + $cardIndex) % count($properties);
        $property = $properties[$propertyIndex];
        
        return [
            'id' => "card_{$columnIndex}_{$cardIndex}",
            'title' => $property['title'] . " [{$columnIndex}-{$cardIndex}]",
            'description' => $property['description'],
            'features' => $property['features'],
            'price' => $property['price'],
            'image' => "https://images.unsplash.com/photo-" . (1564013799919 + $columnIndex * 1000 + $cardIndex) . "?w=600&h=300&fit=crop",
            'link' => "/property/{$columnIndex}/{$cardIndex}"
        ];
    }
}
