<?php
// --- DATA: Add your blog posts here ---
$blog_posts = [
    [
        
        "title" => "Interview Tips 101",
        "excerpt" => "How to ace your first interview with a Japanese company. We cover manners, dress code, and common questions.",
        "image" => "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "news",
        "title" => "Visa Requirements Update",
        "excerpt" => "Understanding the new SSW and TITP visa categories. What documents do you need to prepare today?",
        "image" => "https://images.unsplash.com/photo-1569974498991-d5cfae596c6d?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "latest",
        "title" => "Living in Tokyo Guide",
        "excerpt" => "A guide to finding affordable housing and understanding the train system in the world's biggest city.",
        "image" => "https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "tips",
        "title" => "Resume Writing Hacks",
        "excerpt" => "How to format your CV to catch the eye of Japanese recruiters. Do's and Don'ts for 2024.",
        "image" => "https://images.unsplash.com/photo-1586281380349-632531db7ed4?auto=format&fit=crop&w=600&q=80"
    ],
    // Adding more to show the 2nd row
    [
        "category" => "news",
        "title" => "New Job Openings: Osaka",
        "excerpt" => "We are looking for skilled caregivers and nurses for a new facility in Osaka. Apply now!",
        "image" => "https://images.unsplash.com/photo-1590559399607-932d3d83b852?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "latest",
        "title" => "Learning Basic Nihongo",
        "excerpt" => "Top 5 free apps to start learning Japanese before your deployment.",
        "image" => "https://images.unsplash.com/photo-1528164344705-47542687000d?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "tips",
        "title" => "Culture Shock?",
        "excerpt" => "5 things that might surprise you when you first arrive in Japan (and how to handle them).",
        "image" => "https://images.unsplash.com/photo-1480796927426-f609979314bd?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "category" => "uncategorized",
        "title" => "Ramasia Success Stories",
        "excerpt" => "Meet Maria, who went from an applicant to a supervisor in just 3 years.",
        "image" => "https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=600&q=80"
    ]
];
?>

<!DOCTYPE html>
<html lang="en" class="ra-has-navbar">
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs | Ramasia</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <link rel="stylesheet" href="./css/ramasia-navbar.css">
  
  <link rel="stylesheet" href="./css/ramasia-blog-page.css">
  
  <script defer src="./js/ramasia-navbar.js"></script>
  <script defer src="./js/ramasia-blog.js"></script> </head>

<body class="blog-page">

  <?php include_once './components/navbar.php'; ?>

  <section class="blog-hero">
    <div class="blog-overlay"></div>
    
    <div class="blog-hero-inner">
        <div class="blog-pills">
          <button class="pill-btn active-pill" onclick="window.location.href='Blog.php'">← Resources Page</button>
          
          <div class="pills-right-group">
              <button class="pill-btn">Video Library</button>
              <button class="pill-btn">Reading Materials</button>
              <button class="pill-btn">Resume Template</button>
              <button class="pill-btn">Salary Guide</button>
          </div>
        </div>

        <div class="blog-hero-text">
          <h1>Blog</h1>
          <p>Navigating your path to a successful career abroad, with expert tips and dedicated support for every step of your journey.</p>
        </div>
    </div>
  </section>

  <div class="filter-container">
    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="tips">Tips</button>
        <button class="filter-btn" data-filter="news">News</button>
        <button class="filter-btn" data-filter="latest">Latest</button>
        <button class="filter-btn" data-filter="uncategorized">Uncategorized</button>
    </div>
  </div>

  <div class="blog-grid-container">
    <div class="blog-grid" id="blogGrid">
        
       <?php foreach($blog_posts as $post): ?>
            <article class="blog-card" data-category="<?php echo $post['category']; ?>">
                
                <div class="blog-card-image" style="background-image: url('<?php echo $post['image']; ?>');">
                    <span class="blog-tag"><?php echo ucfirst($post['category']); ?></span>
                </div>

                <div class="blog-card-content">
                    <h3><?php echo $post['title']; ?></h3>
                    <p><?php echo $post['excerpt']; ?></p>
                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        <?php endforeach; ?>

    </div>
  </div>

</body>
</html>