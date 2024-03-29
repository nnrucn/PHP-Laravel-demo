/**
 * @description 获取编辑器默认配置
 * @author wangfupeng
 */
export declare function getDefaultEditorConfig(): {
    hoverbarKeys: {
        text: {
            match: (editor: import("@wangeditor/core").IDomEditor, n: any) => boolean;
            menuKeys: string[];
        };
        link: {
            menuKeys: string[];
        };
        image: {
            menuKeys: string[];
        };
        video: {
            menuKeys: string[];
        };
        pre: {
            menuKeys: string[];
        };
        table: {
            menuKeys: string[];
        };
    };
};
export declare function getSimpleEditorConfig(): {
    hoverbarKeys: {
        link: {
            menuKeys: string[];
        };
        image: {
            menuKeys: string[];
        };
        video: {
            menuKeys: string[];
        };
        pre: {
            menuKeys: string[];
        };
        table: {
            menuKeys: string[];
        };
    };
};
export declare function getDefaultToolbarConfig(): {
    toolbarKeys: (string | {
        key: string;
        title: string;
        iconSvg: string;
        menuKeys: string[];
    })[];
};
export declare function getSimpleToolbarConfig(): {
    toolbarKeys: (string | {
        key: string;
        title: string;
        iconSvg: string;
        menuKeys: string[];
    })[];
};
