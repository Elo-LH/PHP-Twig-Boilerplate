<?php
class Post
{
    private int $id = 0;
    private array $categories = [];

    public function __construct(
        private string $title,
        private string $excerpt,
        private string $content,

    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getExcerpt(): string
    {
        return $this->excerpt;
    }
    public function setExcerpt(string $excerpt): void
    {
        $this->excerpt = $excerpt;
    }
    public function getContent(): string
    {
        return $this->content;
    }
    public function setContent(string $content): void
    {
        $this->content = $content;
    }


    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): void
    {
        $this->categories = $categories;
    }

    public function addCategory(Category $category): void
    {
        array_push($categories, $category);
    }
    public function removeCategory(Category $category): void
    {
        $indexToRemove = array_search($category, $this->categories);
        unset($categories[$indexToRemove]);
    }
}
