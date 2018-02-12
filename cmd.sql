SELECT count(articles.id) as n FROM `articles`;
select count(articles.id) as n FROM articles,category WHERE articles.cid=category.id and category.name = "3d printers";
SELECT articles.*,img.url FROM `articles`,img WHERE img.aid = articles.id GROUP BY articles.id;
select articles.*,img.url FROM articles,category,img  WHERE img.aid = articles.id GROUP BY articles.id and articles.cid=category.id and category.name = "3d printers";

SELECT articles.*,img.url FROM `articles`,img WHERE img.aid = articles.id and articles.id=1;

SELECT cart.id as cart_id,articles.*,cart.pay,cart.completed from cart,articles WHERE articles.id=cart.aid and cart.uid=1 ;
 