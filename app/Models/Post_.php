<?php

namespace App\Models;

// perintah terhubung ke database
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// ke extend dari Model
// class Post extends Model
class Post
{
    private static $blog_post = [
        [
            "title" => 'Blog Pertama',
            "slug" => 'blog-pertama',
            "author" => 'Muhammad Faisal Rizani',
            "content" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa natus quibusdam a iste vitae iure odit reprehenderit, aspernatur optio corrupti esse quidem animi fugit exercitationem, repellat molestiae accusantium adipisci earum cupiditate ducimus soluta! Porro similique enim quibusdam impedit necessitatibus omnis consequuntur aliquid beatae accusantium, quos, laboriosam reprehenderit nihil dolorem commodi. Culpa necessitatibus sit numquam libero, provident quo id labore, ullam fugit sunt eum dolorum? Libero, harum odio! Fugiat animi culpa provident facere. Incidunt est alias odit suscipit excepturi sed velit at tenetur rem corporis. Delectus magnam ratione voluptatibus recusandae doloribus, cupiditate iure cumque sint nam provident nobis id a! Fugit quod ipsum rem iste veritatis quas in officiis molestiae explicabo blanditiis excepturi incidunt doloribus culpa dolores quidem ex dignissimos nam voluptas atque nisi, cupiditate voluptate dolorum. Expedita velit similique sunt necessitatibus omnis eos, error quidem assumenda voluptas quos voluptate iure adipisci accusantium harum eum praesentium inventore ut! Incidunt, perferendis. Non, laboriosam nam iusto, repudiandae consequatur ipsa perferendis explicabo sed error dolores id voluptate rem omnis. Qui, dicta? Id placeat blanditiis eveniet. Accusantium, optio laboriosam! Iure veniam quaerat ipsum. Nesciunt incidunt perferendis quasi eum harum iste minima dolore nemo impedit sequi? Minus, omnis. Quasi illum nesciunt assumenda, natus magnam dicta minus.',
        ],
        [
            "title" => 'Blog Kedua Faisal',
            "slug" => 'blog-kedua',
            "author" => 'Muhammad Faisal',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit quos, enim aliquid excepturi voluptas est aliquam? Quibusdam dolore aliquam nostrum minus eaque recusandae fugiat rerum commodi ipsa, eveniet, labore dicta facilis. Quos suscipit reiciendis earum at soluta nulla animi nihil aspernatur voluptates sapiente eaque, velit et incidunt nisi dolores unde doloremque delectus maiores, veniam veritatis. Nobis asperiores maxime eum saepe accusantium aliquid reiciendis maiores voluptate ad consequatur ipsum odit, eveniet quia cum alias necessitatibus exercitationem. Minima nemo ullam est iusto commodi dolores doloremque, eligendi culpa exercitationem corrupti explicabo itaque a natus nesciunt vero molestias ex hic quidem. Modi voluptates quisquam cum veritatis nam. Qui modi non vel exercitationem ullam in temporibus quod voluptas sint vero culpa incidunt voluptate minus cumque alias enim esse quasi, obcaecati, at atque quae provident molestiae itaque beatae. Fuga exercitationem molestias ex nostrum hic quisquam enim ullam iusto aut. Ea repellat qui pariatur ad vitae aut praesentium enim eos illum id? Officia fuga numquam, praesentium quisquam quasi necessitatibus modi, rerum veritatis repellat nulla architecto, placeat laborum animi dolorum ducimus saepe quia tempora a laboriosam odit. Eos ut excepturi expedita fugiat exercitationem nisi unde iste voluptates, rem dolorum, nesciunt consequatur aspernatur ea voluptate quos. Animi alias reprehenderit laboriosam placeat recusandae nulla velit rem sequi consequuntur distinctio itaque, provident temporibus, quam ea nemo maxime magni, dolorem nobis a nisi? Earum accusantium possimus recusandae? Officia velit optio, sint quos illo amet qui porro esse reprehenderit quasi? Perferendis iusto ipsum molestiae obcaecati ad numquam deleniti quam aliquam accusantium eius tempora, maiores veritatis voluptatum, fugit, iste repellat dolor repellendus! Id quaerat eum nesciunt natus unde suscipit, porro atque. Molestias debitis nihil, ab ipsum quae voluptatum omnis adipisci odit voluptatibus deleniti harum dolor sequi cupiditate accusantium quis soluta repudiandae quod ut mollitia. Fugit illum saepe qui vel, ut perspiciatis commodi quas cumque ab deserunt veritatis obcaecati, rerum blanditiis quaerat delectus assumenda accusamus non asperiores excepturi. Amet harum alias voluptates rem, possimus adipisci eum culpa quae voluptatibus velit excepturi, officiis quod beatae delectus! Facilis fugiat inventore dignissimos asperiores assumenda nulla laboriosam eius. Voluptates nisi inventore hic, nulla sint veniam ratione earum nesciunt unde architecto voluptatum, eligendi mollitia harum repellat. Maiores ab autem debitis ipsum dolorem quibusdam laborum sint dolores quaerat, nihil numquam culpa incidunt, id non velit commodi modi sit vitae amet eos neque. Fuga, dolores nulla recusandae natus perferendis id exercitationem corporis. Ex laudantium neque dicta id facere repudiandae iste quidem ducimus.'
        ]
    ];

    public static function all()
    {
        // collection
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        // collection laravel
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
