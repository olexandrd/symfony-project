<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405132033 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE symfony_demo_user (id BIGINT NOT NULL, full_name TEXT DEFAULT NULL, username TEXT DEFAULT NULL, email TEXT DEFAULT NULL, password TEXT DEFAULT NULL, roles TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX idx_16406_uniq_8fb094a1f85e0677 ON symfony_demo_user (username)');
        $this->addSql('CREATE UNIQUE INDEX idx_16406_uniq_8fb094a1e7927c74 ON symfony_demo_user (email)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE symfony_demo_comment (id BIGINT NOT NULL, post_id BIGINT DEFAULT NULL, author_id BIGINT DEFAULT NULL, content TEXT DEFAULT NULL, published_at TIMESTAMP(0) WITH TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_16385_idx_53ad8f834b89032c ON symfony_demo_comment (post_id)');
        $this->addSql('CREATE INDEX idx_16385_idx_53ad8f83f675f31b ON symfony_demo_comment (author_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE symfony_demo_post (id BIGINT NOT NULL, author_id BIGINT DEFAULT NULL, title TEXT DEFAULT NULL, slug TEXT DEFAULT NULL, summary TEXT DEFAULT NULL, content TEXT DEFAULT NULL, published_at TIMESTAMP(0) WITH TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_16391_idx_58a92e65f675f31b ON symfony_demo_post (author_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE symfony_demo_post_tag (post_id BIGINT NOT NULL, tag_id BIGINT NOT NULL, PRIMARY KEY(post_id, tag_id))');
        $this->addSql('CREATE INDEX idx_16397_idx_6abc1cc4bad26311 ON symfony_demo_post_tag (tag_id)');
        $this->addSql('CREATE INDEX idx_16397_idx_6abc1cc44b89032c ON symfony_demo_post_tag (post_id)');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE symfony_demo_tag (id BIGINT NOT NULL, name TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX idx_16400_uniq_4d5855405e237e06 ON symfony_demo_tag (name)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE symfony_demo_user');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE symfony_demo_comment');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE symfony_demo_post');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE symfony_demo_post_tag');
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE symfony_demo_tag');
    }
}
