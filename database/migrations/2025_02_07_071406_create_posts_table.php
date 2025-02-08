<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ربط بالمستخدم
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null'); // ربط بالتصنيف
            $table->json('title'); // عنوان متعدد اللغات
            $table->json('content'); // محتوى متعدد اللغات
            $table->string('slug')->unique(); // لتحسين SEO
            $table->string('image')->nullable(); // صورة الخبر
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // حالة النشر
            $table->timestamp('published_at')->nullable(); // وقت النشر الفعلي
            $table->unsignedBigInteger('views_count')->default(0); // عدد المشاهدات
            $table->json('tags')->nullable(); // الوسوم
            $table->string('meta_title')->nullable(); // عنوان SEO
            $table->text('meta_description')->nullable(); // وصف SEO
            $table->text('meta_keywords')->nullable(); // كلمات مفتاحية SEO
            $table->timestamps();
            $table->softDeletes(); // لحذف المنشور مؤقتًا
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
