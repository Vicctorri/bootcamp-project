const popularArticleTemplate = document.querySelector('[popular-article-template]');
const listOfArticles = document.querySelector('[articles-list]')

axios.get('/api/articles/most-popular').then(({data}) => {
    data.forEach((articleItem) => {
        const article = popularArticleTemplate.content.cloneNode(true).children[0];

        article.querySelector('[data-title]').textContent = articleItem.title;

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
