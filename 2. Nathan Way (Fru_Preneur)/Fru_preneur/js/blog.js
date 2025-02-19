// Dummy Blog Data
const blogs = [
    {
        id: 1,
        title: "Blog Title 1",
        author: "Author 1",
        date: "Jan 25, 2025",
        description: "This is a brief description of Blog 1.",
        image: "#",
        likes: 0,
        dislikes: 0,
        comments: []
    },
    {
        id: 2,
        title: "Blog Title 2",
        author: "Author 2",
        date: "Jan 20, 2025",
        description: "This is a brief description of Blog 2.",
        image: "#",
        likes: 0,
        dislikes: 0,
        comments: []
    },
    // Add more blog objects as needed
];

// Select Blog Container
const blogContainer = document.getElementById("blogContainer");

// Render Blog Posts
function renderBlogs() {
    blogContainer.innerHTML = "";
    blogs.forEach((blog) => {
        const blogPost = document.createElement("div");
        blogPost.className = "blog-post";
        blogPost.innerHTML = `
            <img src="${blog.image}" alt="${blog.title}" class="blog-image" onclick="viewSingleBlog(${blog.id})">
            <div class="blog-content">
                <h2 class="blog-title" onclick="viewSingleBlog(${blog.id})">${blog.title}</h2>
                <p class="blog-meta">By <strong>${blog.author}</strong> | Published on <strong>${blog.date}</strong></p>
                <p class="blog-description">${blog.description}</p>
                <div class="blog-interactions">
                    <button class="like-btn" onclick="likePost(${blog.id})">👍 Like (<span>${blog.likes}</span>)</button>
                    <button class="dislike-btn" onclick="dislikePost(${blog.id})">👎 Dislike (<span>${blog.dislikes}</span>)</button>
                    <span class="comment-count">${blog.comments.length} Comments</span>
                </div>
                <div class="comment-section">
                    <textarea id="comment-${blog.id}" placeholder="Write a comment..." rows="3"></textarea>
                    <button class="post-comment-btn" onclick="postComment(${blog.id})">Post Comment</button>
                </div>
            </div>
        `;
        blogContainer.appendChild(blogPost);
    });
}

// Like a Blog Post
function likePost(blogId) {
    const blog = blogs.find((b) => b.id === blogId);
    blog.likes += 1;
    renderBlogs();
}

// Dislike a Blog Post
function dislikePost(blogId) {
    const blog = blogs.find((b) => b.id === blogId);
    blog.dislikes += 1;
    renderBlogs();
}

// Post a Comment
function postComment(blogId) {
    const commentInput = document.getElementById(comment-${blogId});
    const commentText = commentInput.value.trim();
    if (commentText) {
        const blog = blogs.find((b) => b.id === blogId);
        blog.comments.push(commentText);
        commentInput.value = "";
        renderBlogs();
    } else {
        alert("Comment cannot be empty!");
    }
}

// View Single Blog Post
function viewSingleBlog(blogId) {
    const blog = blogs.find((b) => b.id === blogId);
    if (blog) {
        localStorage.setItem("currentBlog", JSON.stringify(blog));
        window.location.href = "single-blog.html";
    }
}

// Initialize Blogs
renderBlogs();