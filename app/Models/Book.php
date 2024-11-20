<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    //
    use HasFactory;
    public function reviews():HasMany {
        return $this->hasMany(Review::class, "book_id");
    }

    public function scopeContainTitle(Builder $query, string $title): Builder {
        return $query->where("title", "like", "%$title%");
    }

    public function scopeBestRated(Builder $query): Builder {
        return $query->withAvg("reviews", "rating")->orderByDesc("reviews_avg_rating");
    }

    public function scopePopular(Builder $query): Builder {
        return $query->withCount("reviews")->orderByDesc("reviews_count");
    }

    public function scopeBookWithMostReviewsBetweenTimeline(Builder $query, string $start = null, string $end = null): Builder {
        return $query->withCount(["reviews" => fn(Builder $query) => $this->filterDate($query, $start, $end)])->orderByDesc("reviews_count");
    }

    public function scopeBookWithBestRatingBetweenTimeline(Builder $query, string $start = null, string $end = null): Builder {
        return $query->withAvg(["reviews" => fn(Builder $query) => $this->filterDate($query, $start, $end)], "rating")->orderByDesc("reviews_avg_rating");
    }

    public function scopeReviewMinimum(Builder $query, int $min): Builder {
        return $query->withCount("reviews")->having("reviews_count", ">=", $min);
    }

    private function filterDate(Builder $query, string $start= null, string $end = null) {
        if($start && !$end){
            return $query->whereBetween("created_at", [$start, now()]);
        }
        if(!$start && $end){
            return $query->where("created_at", "<=", $end);
        }
        return $query->whereBetween("created_at", [$start, $end]);
    }
}
