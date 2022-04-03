const popularArticleTemplate = document.querySelector('[popular-article-template]');
const listOfArticles = document.querySelector('[articles-list]')

axios.get('/api/articles/most-popular').then(({data}) => {
    data.forEach((articleItem) => {
        console.log(articleItem)
        const article = popularArticleTemplate.content.cloneNode(true).children[0];
        let articleTitle = article.querySelector('[data-title]');

        const titleLink = document.createElement('a');
        titleLink.href = `/blog/article/${articleItem.id}`;
        titleLink.textContent = articleItem.title;
        articleTitle.append(titleLink);

        // article.querySelector('[data-image]').style.backgroundImage= `url(${articleItem.image_url})`;
        // article.querySelector('[data-image]').innerHTML = `url(${articleItem.image})`;
        // article.querySelector('[data-excerpt]').textContent = articleItem.excerpt;

        const counterElement = article.querySelector('[data-views-counter]')
        counterElement.innerHTML= `
            ${articleItem.view_count}
            <span class="visually-hidden">unread messages</span>
        `;

        if (!articleItem.view_count) {
            counterElement.hidden = true;
        }

        listOfArticles.append(article)
    })

})
