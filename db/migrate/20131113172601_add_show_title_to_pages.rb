class AddShowTitleToPages < ActiveRecord::Migration
  def change
    add_column :pages, :showtitle, :boolean, :default => true
  end
end
