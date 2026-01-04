<!DOCTYPE html>
<html>
<head>
    <title>Restaurants</title>
    <style>
        body { 
            font-family: Arial; 
            padding: 20px; 
            background: #f5f5f5;
        }
        h1 {
            color: #333;
        }
        .restaurant { 
            background: white;
            border: 1px solid #ddd; 
            border-radius: 8px;
            padding: 20px; 
            margin: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .restaurant h2 {
            color: #DC2626;
            margin-top: 0;
        }
        .categories {
            margin-top: 15px;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 4px;
        }
        .category {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            background: #3B82F6;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>All Restaurants</h1>
    
    @foreach($restaurants as $restaurant)
        <div class="restaurant">
            <h2>{{ $restaurant->name }}</h2>
            <p><strong>Email:</strong> {{ $restaurant->email }}</p>
            <p><strong>Slug:</strong> {{ $restaurant->slug }}</p>
            <p><strong>Color:</strong> <span style="color: {{ $restaurant->primary_color }}">{{ $restaurant->primary_color }}</span></p>
            
            <div class="categories">
                <strong>Categories:</strong>
                @foreach($restaurant->categories as $category)
                    <span class="category">{{ $category->name }}</span>
                @endforeach
            </div>
        </div>
    @endforeach
</body>
</html>
